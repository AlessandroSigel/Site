<!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Mensagem Enviada</title>
            <link rel="stylesheet" href="css/normalize.css" />
            <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"/>
            <link rel="stylesheet" href="css/estilo.css" />
        </head>
        <body>
    
    <?php
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $assunto = $_POST['assunto'];
    $mensagem = $_POST['mensagem'];

        require 'vendor/autoload.php';

        $from = new SendGrid\Email(null, $email);
        $subject = "Mesangem de Contato";
        $to = new SendGrid\Email(null, "seu-email@gmail.com");
        $content = new SendGrid\Content("text/html", "Olá Alessandro, <br><br> Nova mensagem de contato<br><br>Nome: $nome <br>E-mail: $email <br>Assunto: $assunto <br>Mensagem: $mensagem");
        $email = new SendGrid\Mail($from, $subject, $to, $content);
        
        //Necessário inserir a chave
        $apiKey = '';
        $sg = new \SendGrid($apiKey);

        $response = $sg->client->mail()->send()->post($email);
        ?>
               <div class="header">
            <div class="linha">
                <header>
                    <div class="coluna col4">
                        <h1 class="logo"> AleSigel</h1>
                    </div>
                    <div class="coluna col8">
                        <nav>
                            <ul class="menu inline sem-marcador">
                                <li><a href="index.html">Home</a></li>
                                <li><a href="clientes.html">Clientes</a></li>
                                <li><a href="servicos.html">Serviços</a></li>
                                <li><a href="sobre.html">Sobre</a></li>
                                <li><a href="contato.php">Contato</a></li>
                            </ul>
                        </nav>
                    </div>    
                </header>
            </div>
        </div>
        <div class="linha">
            <header>
                <div class="coluna col12" >
                    <h1 class="center">Mensagem Enviada Com Sucesso!</h1>
                    <img class="center" src="img/email.gif" alt="" />
                </div>
            </header>
            </div>
        </body>
        </html>
       
