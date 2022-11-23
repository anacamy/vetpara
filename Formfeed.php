<?php
require ("database/DBConnection.class.php");

class Formfeed {
    private $conn = null;
 
    public function __construct()
    {
        $this-> conn = new DBConnection();
    }
  
    public function send () 
    {
        $conn = new DBConnection();
        $nome = $_POST['nomePHP'];
        $mensagem = $_POST['mensagemPHP'];
        $sqlCommand = ("INSERT INTO feedback(nome, mensagem) VALUES ('$nome', '$mensagem');");
        $conn-> query($sqlCommand);
    }

}
    $teste = new Formfeed();
    $teste->send(); 

?>