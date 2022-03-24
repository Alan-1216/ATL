<?php
$dia = date('d');
$mes = date('m');
$ano = date('y');

$resul = $dia * $mes * $ano * 3;

?>

<html lang="pt-br">
    <head>
        <title> Senha Do Dia </title>
        <meta charset="utf-8">
        <meta name="author" content="Alan">
        <meta name="description" content="senha do dia">
        <meta name="keyboards" content="html5, tecnologia, hora, calculo">

        <link rel="stylesheet" href="css/background.css">
        <link rel="stylesheet" href="css/texto.css">
        <link rel="stylesheet" href="css/input.css">
        <link rel="stylesheet" href="css/rodape.css">
    </head>
    <body>
        <div class="principal">
            <header class="texto">
                <div>
                    <h1>Senha do Dia é:</h1>
                </div>
            </header>
        </div>
        <main>
            <section>
                <article>
                    <header>
                        <div id="caixa">
                            <h2>
                            <input type="text" value="<?php echo $resul; ?>">
                            </h2>
                        </div>
                    </header>
                </article>
            </section>
        </main>
        
            <footer class="rodape">
                <p>Copyright &copy;2022 Alan Felipe</p>
            </footer>
        
    </body>
</html>