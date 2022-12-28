<?php
    if(isset($_POST['action']) && !empty($_POST['email'])){
        $nome = addslashes($_POST['nome']);
        $sobrenome = addslashes($_POST['sobrenome']);
        $email = addslashes($_POST['email']);
        $mensagem = addslashes($_POST['mensagem']);

        $para = "meuemail@exemplo.com";
        $assunto = "Formulario de contato";
        $corpo = "Nome: " .$nome." ".$sobrenome. "\r\n".
                 "Email: ".$email. "\r\n".
                 "Mensagem: " .$mensagem;
        $header = "From:email@exemplo.com". "\r\n".
                  "Reply-To:".$email. "\r\n".
                  "X=Mailer:PHP/".phpversion();

        if(mail($para,$assunto,$corpo,$header)){
            echo 'O e-mail foi enviado com sucesso';
        }else{
            echo 'O e-mail não pode ser enviado';
        };
    }
?>