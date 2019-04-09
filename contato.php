<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8" />
        <title>AleSigel - Contato</title>
        <link rel="stylesheet" href="css/normalize.css" />
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet"/>
        <link rel="stylesheet" href="css/estilo.css" />
        <link href="processa.php"/>
    </head>
    <body>
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
                                <li><a href="contato.html">Contato</a></li>
                            </ul>
                        </nav>
                    </div>    
                </header>
            </div>
        </div>
        <div class="linha">
            <section>
                <div class="coluna col5 sidebar">
                    <h3>Localização</h3>
                    <img src="img/mapa.jpg" alt="" />
                    <ul class="sem-padding sem-marcador" >
                        <li><a href="https://goo.gl/maps/cyLXCeQYrrk" target="bank" title="Ir para Endereço"> <strong>Abrir Endereço no Google Maps</strong></a></li>
                        <li>Bairro Efapi, Chapecó - SC</li>
                    </ul>
                    <h3>Contato Direto</h3>
                    <ul>
                        <li>Fone: <strong>(49)99975-4816</strong></li>
                        <li>Email:<strong> alessandrosigel09@gmail.com</strong></li>
                        <li>Facebook:<strong> Alessandro Sigel</strong></li>
                    </ul>
                </div>
                <div class="coluna col7 contato">
                    <h2>Envie sua mensagem</h2>
                    <form method="POST" action="processa.php">
                        <label for="name" > Seu nome:</label>
                        <input type="text" name="nome"  placeholder="Nome" />

                        <label for="email"> Seu email:</label>
                        <input type="text" name="email"  placeholder="E-mail" />

                        <label for="assunto"> Assunto:</label>
                        <input type="text" name="assunto"  placeholder="Assunto" />

                        <label for="mensagem" > Mensagem:</label>
                        <textarea name="mensagem"  placeholder="Escreva sua Mensagem"></textarea>
                        
                        <input type="submit" class="botao" name="enviar" value="Enviar &raquo;" />
                    </form>
                </div>
            </section>
        </div>
        <div class="conteudo-extra">
            <div class="linha">
                <div class="coluna col7">
                    <section>
                        <h2>Método alternativo de Contato</h2>
                        <p>Caso não consiga me contatar por alguns dos meios acima, possivelmente eu estarei em uma ilha deserta 
                        em algum lugar do pacífico. Neste caso há duas possibilidades:</p>
                        <ol>
                            <li>Enviar uma mensagem em uma garrafa</li>
                            <li>Tentar um sinal de fumaça</li>
                        </ol>
                        <p>Mas sinceramente não sei se algum  desses métodos será enficiente, tente por sua conta e risco :D </p>
                    </section>
                </div>
                <div class="coluna col5">
                    <h3>Últimas notícias</h3>
                    <ul class="sem-marcador sem-padding noticias">
                        <li>
                        <img src="img/noticia1.jpg" alt="">
                        <h4>Alunos derrubam Wifi para impedir a realização de prova</h4>
                        <p>A escola New Jersey Secuacus, nos Estados Unidos,
                         possui um sistema de aprendizado online para os estudantes 
                         realizarem lições conectados. Para isso, a própria escola 
                         também oferece rede WiFi para tornar possível esse tipo de aprendizado.
                         <a href="https://www.tecmundo.com.br/seguranca/140193-alunos-derrubam-wifi-escola-impedir-realizacao-provas.htm"
                          target="_bank">Leia Mais &raquo;</a></p>
                        </li>
                        <li>
                            <img src="img/noticia2.jpg" alt="">
                            <h4>Listas dos 10 filmes maispirateados da semana</h4>
                            <p>Seguindo a tradição, o site norte-americano TorrentFreak divulgou nesta segunda-feira (08)
                                 a lista com os 10 filmes mais pirateados durante os últimos sete dias. 
                                 Para a criação desses rankings, ele faz uma busca nos arquivos mais baixados 
                                 pela rede do BitTorrent — uma das mais populares da atualidade. 
                                 <a href="https://www.tecmundo.com.br/cultura-geek/140194-lista-10-filmes-pirateados-semana-08-04-2019.htm"
                                target="_bank">Leia Mais &raquo;</a></p>
                        </li>
                        <li>
                                <img src="img/noticia3.jpg" alt="">
                                <h4>AMD anuncia novos processadores Ryzen Pro e Athlon Pro para notebooks</h4>
                                <p>A AMD anunciou nesta segunda-feira (8) sua nova linha de processadores para notebooks.
                                 A segunda geração do Ryzen Pro e do Athlon Pro vem na arquitetura de 12 nm, 
                                 conta com placa gráfica Radeon Vega, promete melhor eficiência no consumo de energia, 
                                 recursos de segurança atualizados e parceria com fabricantes que possam entregar um gama de 
                                 produtos para atender ao uso diário até  às atividades mais intensas. 
                                 <a href="https://www.tecmundo.com.br/produto/140192-amd-anuncia-novos-processadores-ryzen-pro-athlon-pro-notebooks.htm"
                                 target="_bank">Leia Mais &raquo;</a></p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer">
            <div class="linha">
                <footer>
                    <div class="coluna col12">
                        <span>&copy; 2019 - AleSigel Developer</span>
                    </div>
                </footer>
            </div>
        </div>
    </body>
</html>