<?php
require_once "../model/OrdemServico.php";
require_once "../control/conexao.php";
require_once "../control/login.php";

class OrdemServicoController {
    private $ordemServico;

    public function __construct($db) {
        $this->ordemServico = new OrdemServico($db);
    }

    public function criaOrdem($nome, $email, $setor, $pedido) {
        return $this->ordemServico->criaOrdem($nome, $email, $setor, $pedido);
    }

    public function listaOrdens() {
        return $this->ordemServico->listaOrdens();
    }

    public function atualizaOrdem($id, $pedido) {
        return $this->ordemServico->atualizaOrdem($id, $pedido);
    }

    public function deletaOrdem($id) {
        return $this->ordemServico->deletaOrdem($id);
    }
}
?>