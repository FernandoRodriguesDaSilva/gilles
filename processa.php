<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $email = $_POST['email'];
    $mensagem = $_POST['assunto'];

    require 'vendor/autoload.php';

    $from = new SendGrid\Email(null, "andre.gilles65@gmail.com");
    $subject = "Mensagem de contato";
    $to = new SendGrid\Email(null, "andre.gilles65@gmail.com");
    $content = new SendGrid\Content("text/html", "Olá André, <br><br>Nova mensagem, que veio do site Engenharia Gilles, <br><br>Nome: $nome<br>Email: $email <br>Mensagem: $mensagem <br> Telefone: $telefone");
    $mail = new SendGrid\Mail($from, $subject, $to, $content);
        //Necessário inserir a chave
    $apiKey = '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';
    $sg = new \SendGrid($apiKey);

    $response = $sg->client->mail()->send()->post($mail);
    header('Location: index.php');
    ?>
</body>
</html>
