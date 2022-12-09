<?php
require_once("../database/DBConnection.class.php");

class LoginAdmin{
    
    public function __construct(){
    }

    public function loginAdmin($email, $senha){
        $conexao = new PDO('mysql:host=51.79.72.47;dbname=hostdeprojetos_vetparaiso', 'hostdeprojetos_grums', '~Bp7XwlL%oBP');
        $query = $conexao->prepare("SELECT * FROM colaboradores WHERE email = ? AND senha = ?");
        $query->execute(array($email, $senha));

    if($query->rowCount()){
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];

        session_start();
        $_SESSION['loggedIN'] = '1'; 
        $_SESSION['email'] = '$email';
        $_SESSION["usuario"] = array($user["nome"], $user["email"]);

        header("Location: ../admin/controle.php");

    }else{
        echo "Não";
    }
    }
}
$loginAdmin = new LoginAdmin();
$loginAdmin->loginAdmin($_POST['email'], $_POST['senha']);
?>