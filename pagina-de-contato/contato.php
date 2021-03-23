<?php
if(isset($_POST["email"]) && !empty($_POST["email"]) ){

$nome = addslashes($_POST["nome"]);
$email = addslashes($_POST["email"]);
$mensagem = addslashes($_POST["mensagem"]);

$to ="totranquilao@gamil.com";
$subjet = addslashes($_POST["assunto"]);
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;

$header = "From: joao.ireneu@gmail.com"."\r\n".
            "Reply-To: ".$email."\r\n".
            "X-Mailer: PHP".phpversion();

if(mail($to,$subjet,$body,$header)){
    include("contato.html")
}else{
    include("contato.html")
}
}
?>