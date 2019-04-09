<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, "cesar@celke.ga");
        $subject = "Confirmar email";
        $to = new SendGrid\Email(null, "celkeadm@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá, <br><br>Link para confirmar");
        $mail = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = 'SENDGRID_API_KEY';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($mail);
        echo $response->statusCode();
        echo $response->headers();
        echo $response->body();
        ?>
    </body>
</html>
