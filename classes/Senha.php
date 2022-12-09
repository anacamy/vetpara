<?php
class Senha{
    private $email;
    private $senha;
    private $senha2;
    private $conn;

    public function __construct(){
        $this->conn = new PDO('mysql:host=51.79.72.47;dbname=hostdeprojetos_vetparaiso', 'hostdeprojetos_grums', '~Bp7XwlL%oBP');
    }

    public function novaSenha(){
        $this->email = $_POST['email'];
        $this->senha = $_POST['senha'];
        $this->senha2 = $_POST['senha2'];

        $listaUser = $this->conn->prepare("SELECT*FROM usuarios WHERE email = ? AND google = ?;");
        $listaUser->execute(array($this->email, 0));
        $result = $listaUser->rowCount();
        
        if($result != 0 && ($this->senha == $this->senha2)){
            $SqlCommand = $this->conn->prepare("UPDATE usuarios SET senha = ? WHERE email = ?;");
            $SqlCommand->execute(array($this->senha, $this->email));
            session_start();
            $_SESSION['sucesso'] = "Alterada com sucesso!";
            header("location: ../includes/senha.php");
        }else{
            session_start();
            $_SESSION['erro'] = "Usúario não existente ou senhas incorretas, tente novamente";
            header("location: ../includes/senha.php");
        }
    }
}

$senha = new Senha();
$senha->novaSenha();
?>