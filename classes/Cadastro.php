<?php
require("../database/DBConnection.class.phpv");

class Cadastro{
    private $conn;
    private $dados;
    private $nome;
    private $fone;
    private $email;
    private $cadastrado;

    public function __construct(){
        $this->conn = new DBConnection();
        $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
        $this->cadastrado = 0;
    }

    public function cadastarUser(){
        $this->nome = $this->dados["nome"];
        $this->fone = $this->dados["fone"];
        $this->email = $this->dados["email"];

        $sqlCode = "SELECT * FROM usuarios WHERE email = '$this->email';";
        $sqlResults = $this->conn->query($sqlCode);
        $rowCount = $sqlResults->num_rows;
        if($rowCount != 0){
            header("location: ../index.php");
        }else{
            function randomPassword() {
                $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
                $pass = array(); 
                $alphaLength = strlen($alphabet) - 1; 
                for ($i = 0; $i < 6; $i++) {
                    $n = rand(0, $alphaLength);
                    $pass[] = $alphabet[$n];
                }
                return implode($pass); 
            }        
            $emailenviar = "centrovetparaiso@gmail.com";
            $destino = $this->email;
            $assunto = utf8_decode("Confirmação de cadastro");
            $mandatario = utf8_decode("Vet Paraíso");
            $senha = randomPassword();
          
            $arquivo ="
            <img style='width: 270px; height: 270px; display: block; margin-left: auto; margin-right: auto;' src='../images/LOGO.png'>
            <p style='font-size: 18px'>Bem-vindo(a) ao <b>Centro Veterinário Paraíso</b> Sua senha de acesso é:  <b>$senha</b></p>
            <p style='font-size: 18px'>Faça o seu primeiro login em nosso site com essa senha. Em caso de dúvidas, entre em contato conosco.</p><br>
            <p style='font-size: 18px'>Att, Suporte Vet Paraíso.</p>
            ";
          
            $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: ' .$mandatario. ' <'.$emailenviar.'>';
          
            $enviaremail = mail($destino, $assunto, $arquivo, $headers);

            $sqlCode = "INSERT INTO usuarios (nome, telefone, email, senha) VALUES ('$this->nome', '$this->fone', '$this->email', '$senha');";
            $this->conn->query($sqlCode);
        }
    }

    public function cadastarUserGoogle($nome, $email){
        $sqlCodeGoogle = "INSERT INTO usuarios (nome, email, google) VALUES ('$nome', '$email', 1);";
        $this->conn->query($sqlCodeGoogle);
    }
}
$cadastrar = new Cadastro();
$cadastrar->cadastarUser();
?>