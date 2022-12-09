<?php
//Mandando o feedback para o banco de dados 

require_once("../database/DBConnection.class.php");

class Formfeed {
    private $conn = null;
 
    public function __construct()
    {
        $this-> conn = new DBConnection();
    }
  
    public function send () 
    {
        $conn = new DBConnection();
        $nome = $_POST['Nome'];
        $mensagem = $_POST['Mensagem'];
        $email = $_POST['Email'];
        $sqlCommand = ("INSERT INTO feedback(nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem');");
        $conn-> query($sqlCommand);
        session_start();
        $_SESSION['sucesso'] = "Enviado com sucesso!";
    }

}
    $teste = new Formfeed();
    $teste->send(); 

?>