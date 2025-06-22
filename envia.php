<?php

    $nome = addcslashes($_POST['nome']);
    $email = addcslashes($_POST['email']);
    $celular = addcslashes($_POST['celular']);

    $para = "deivissonleite14@gmail.com";
    $assunto = "Mensagem do site DLC";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."celular: ".$celular;

    $cabeca = "Fron: deivissonleite14@gmail.com"."\n"."Reply-to: ". $email."\n"."X=Mailer:PHP/".phpversion();

    if(mail($para,$assunto,$corpo,$cabeca)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("Houve um erro ao enviar o email");
    }
?>