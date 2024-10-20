<?php 

$nome = addslashes($_POST['nome']);
$email = addslashes($_POST['email']);
$contato = addslashes($_POST['contato']);

$destino = "atendimento@tecnodeo.com";
$assunto = "Coleta de dados - TecnoDeo";

$corpo = "Nome: ".$nome."\n"."E-mail".$email."\n"."Telefone: ".$contato;

$cabeca = "From: deocleciano002@gmail.com"."\n"."Reply-to: ".$email."\n"."X=Mailer:PHP/".phpversion();

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>\n";


//Enviar
if(mail($destino,$assunto,$corpo,$headers)){
    echo "<meta http-quiv='refresh' content='10;URL=../pages/contato.php'";
    echo('E-mail enviado com sucesso!');
}else{
    echo "<meta http-quiv='refresh' content='10;URL=../pages/contato.php'";
    echo('Houve um erro ao enviar o email!');
}
?>