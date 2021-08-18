<?php
if (isset($_POST['BTEnvia'])){
 $email= $_POST['email'];
$var = $_POST["sugestao"];
$var = $_POST["idade"];
$var = $_POST["senha"];
$var = $_POST["arquivo"];
$var = $_POST["logar"];
$var = $_POST["linguagens"];
$var = $_POST["ferias"];
$var = $_POST["praias"];
$var = $_POST["usuario"];



if (mail ($email, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
    echo "</b>E-Mail enviado com sucesso!</b>"; 
    } 
    else{ 
    echo "</b>Falha no envio do E-Mail!</b>"; } 
   } 



?>