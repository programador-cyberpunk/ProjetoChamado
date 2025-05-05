<?php

class OrdemServico {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    public function criaOrdem($nome, $email, $setor, $pedido) {
        $stmt = $this->conn->prepare("INSERT INTO ordens_servico (nome, email, setor, pedido) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $nome, $email, $setor, $pedido);
        return $stmt->execute();
    }

    public function listaOrdens() {
        $result = $this->conn->query("SELECT * FROM ordens_servico");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function atualizaOrdem($id, $pedido) {
        $stmt = $this->conn->prepare("UPDATE ordens_servico SET pedido = ? WHERE id = ?");
        $stmt->bind_param("si", $pedido, $id);
        return $stmt->execute();
    }

    public function deletaOrdem($id) {
        $stmt = $this->conn->prepare("DELETE FROM ordens_servico WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>