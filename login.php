<?php

require __DIR__.'/vendor/autoload.php';
require __DIR__.'/app/User.php';
require_once('classes/Cadastro.php');

use Google\Client as GoogleClient;
use Google\Service\Fitness\Session;
use \App\Session\User;
use Google\Service\Forms\Info;

//Verifica as credenciais da conta google do usuário,e se não receber ele volta para a index

if (!isset($_POST['credential']) || !isset($_POST['g_csrf_token'])) {
    header('location: index.php');
    exit();
}else{
}
//código disponibizado no site da google
$cookie = $_COOKIE['g_csrf_token']??"";

if ($_POST['g_csrf_token'] != $cookie) {
    header('location: index.php');
    exit;
}


// Get $id_token via HTTPS POST.

$client = new GoogleClient(['client_id' => '118814873701-pjtvs8ghqgrbrt8s1bhlcddjbpqc5jre.apps.googleusercontent.com']); 
 // Specify the CLIENT_ID of the app that accesses the backend
$payload = $client->verifyIdToken($_POST['credential']);
if (isset($payload['email'])) {
    User::login($payload['name'], $payload['email']);
    $info = \App\Session\User::getInfo();
    $cadastrarGoogle = new Cadastro();
    $cadastrarGoogle->cadastarUserGoogle($info['name'], $info['email']);
    header('location: index.php');
    exit;
}

die('Problema');