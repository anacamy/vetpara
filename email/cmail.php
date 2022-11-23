<?php

require __DIR__.'/Email.class.php';

$email = new Email();
$email->setFrom("aninha50507@gmail.com", "Ana");
$email->addTo("biancagrum@gmail.com", "Bianca");
$email->getSubject("Teste de Email");
$email->setMsgTxt("Teste de amil pelo PHP");
$email->send_gmail();

?>