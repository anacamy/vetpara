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
        $conn = new PDO('mysql:host=51.79.72.47;dbname=hostdeprojetos_vetparaiso', 'hostdeprojetos_grums', '~Bp7XwlL%oBP');
        $nome = $_POST['Nome'];
        $mensagem = $_POST['Mensagem'];
        $email = $_POST['Email'];
        $sqlCommand = ("INSERT INTO feedback(nome, email, mensagem) VALUES ('$nome', '$email', '$mensagem');");
        $conn-> exec($sqlCommand);
    }

}
    $teste = new Formfeed();
    $teste->send(); 

?>