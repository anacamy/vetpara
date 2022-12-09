<?php
require('../database/DBConnection.class.php');
$conn = new DBConnection();

$reposta = $_POST['resposta'];
$email = $_POST['email'];
$id = $_POST['id'];

if(isset($_POST['responder']) || isset($_POST['editar'])){
    $SqlCommand = "UPDATE feedback SET resposta = '$reposta' WHERE id = '$id';";
    $conn->query($SqlCommand);
}elseif(isset($_POST['apagarFeed'])){
    $SqlCommand = "DELETE FROM feedback WHERE id = '$id';";
    $conn->query($SqlCommand);
}elseif(isset($_POST['apagarUser'])){
    $SqlCommand = "DELETE FROM usuarios WHERE email='$email';";
    $conn->query($SqlCommand);
}