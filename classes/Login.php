<?php

//Verifica se o usuário existe no banco de dados, para então fazer o login

use App\Session\User;

require_once("../database/DBConnection.class.php");
require_once("../app/User.php");

class Login{
    private $conn;
    private $dados;
    private $email;
    private $user;
    private $senha;

    public function __construct(){
        $this->conn = new DBConnection();
        $this->dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);
    }

    public function logarUser(){
        $this->email = $this->dados["email"];
        $this->senha = $this->dados["senha"];

        $sqlCode = "SELECT * FROM usuarios WHERE email = '$this->email' AND senha = '$this->senha';";
        $sqlResults = $this->conn->query($sqlCode);
        while($row = $sqlResults->fetch_assoc()){
            $this->user['nome'] = $row;
        }
        $rowCount = $sqlResults->num_rows;

        if($rowCount != 0){
            $session = new User();
            $session->login($this->user["nome"]["nome"], $this->user["nome"]["email"]);
            header('location: ../index.php');
        }else{
            echo "Não logado";
        }
    }
}
$logi = new Login();
$logi->logarUser();
?>