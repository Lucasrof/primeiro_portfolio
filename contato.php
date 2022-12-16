<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$subject= $_POST['subject'];
$mensagem = $_POST['mensagem'];
$subject = '';

//manda email 
//salvar no bando de dados


$toEmail = "lucasrosaf.dev@gmail.com";
$mailHeaders = 'From: lucasrosaf.dev@gmail.com' . "\r\n" . 'Reply-To: ' . $nome . '<' . $email . ">\r\n" . 'X-Mailer: PHP/' . phpversion();

$mailHeaders = "From: " . $nome . "<" . $email . ">\r\n";

// if lines are larger than 70 chars, then should be wrapped
$message = wordwrap($mensagem, 70, "\r\n");

// your PHP setup should have configuration to send mail
$isValidMail = mail($toEmail, $subject, $message, $mailHeaders);

header('Location: index.html');

?>