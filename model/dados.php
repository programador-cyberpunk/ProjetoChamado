<?php
///botei numa classe dados de login do usuario pra poder organizar melhor os pedidos e requisições
 class Dados{
  private $nome;

  private $senha;
  
  private $email;

  private $ordem;
  
  private $setor;
   public function setNome($nm){
      $this->nome = $nm;
   }

   public function setSenha($se){
    $this->senha = $se;
   }

   public function setEmail($em){
    $this->email = $em;
   }

   public function setOrdem($o){
      $this->ordem = $o;
   }

   public function setSetor($set){
      $this->setor = $set;
   }
 }











?>