<?php


if ( session_status() == PHP_SESSION_NONE ) { //  PHP >= 5.4.0
    session_start();
}

$path   = array();
$confDB = array();
$smtp   = array();

// Definir caminhos padrões
$path["projectDIR"]     = __DIR__ ;
$path["projectURL"]     = __DIR__ ;
$path["uploadPublic"]   = __DIR__ ."/upFilesPublic/";
$path["uploadPrivate"]  = __DIR__ ."/upFilesPrivate/";
$path["autoload"]       = __DIR__ ."/autoload.php";
$_SESSION['path']       = $path;

// Definir configurações de Banco de Dados
if ( $_SERVER ['HTTP_HOST'] == 'localhost' ){ // Em localhost
    $confDB['host']     = "localhost";
    $confDB['user']     = "root";
    $confDB['pass']     = "";
    $confDB['schema']   = "hostdeprojetos_vetparaiso";
}else{                                  // Em deploy
    $confDB['host']  = "51.79.72.47";
    $confDB['user']  = "hostdeprojetos_grums";
    $confDB['pass']  = "~Bp7XwlL%oBP";
    $confDB['schema']= "hostdeprojetos_vetparaiso";
}
$_SESSION["confDB"] = $confDB;

// Definir Configurações de SMTP
$smtp['host']       = 'smtp.gmail.com';
$smtp['auth']       =  true;
$smtp['secure']     = 'tls';
$smtp['username']   = 'exemplo@gmail.com';
$smtp['password']   = 'senha';
$smtp['port']       =  465;
$_SESSION["smtp"]   = $smtp;

?>