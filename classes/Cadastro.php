<?php
require_once("../database/DBConnection.class.php");

class Cadastro{
    private $conn;
    private $dados;
    private $nome;
    private $fone;
    private $email;
    private $senha;

    public function __construct(){
        $this->conn = new DBConnection();
        $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    }

    function cadastarUser(){
        $this->nome = $this->dados["nome"];
        $this->fone = $this->dados["fone"];
        $this->email = $this->dados["email"];
        $this->senha = $this->dados["senha"];

        $sqlCode = "INSERT INTO usuarios (nome, telefone, email, senha) VALUES ('$this->nome', '$this->fone', '$this->email', '$this->senha');";
        $this->conn->query($sqlCode);
    }
}
$cadastrar = new Cadastro();
$cadastrar->cadastarUser();
?>