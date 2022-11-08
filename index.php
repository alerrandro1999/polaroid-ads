<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://fonts.googleapis.com/css?family=Poiret+One' rel='stylesheet' type='text/css'>
    <title>Polaroid</title>
</head>

<body>
    <div id="stars"></div>
    <div id="stars2"></div>
    <div id="stars3"></div>
    <h1>Bem vindo ao mural de polaroids da turma de ADS</h1>
    <section class="container">
        <?php
        $pasta = "imagens/";
        $diretorio = dir($pasta);
        while ($arquivo = $diretorio->read()) {
            if ($arquivo != '.' && $arquivo != '..') {
                echo '<div class="polaroid">
                        <img src="' . $pasta . $arquivo . '"
                            class="polaroid__image" />
                        <span class="polaroid__foto">ExpoFadesa</span>
                    </div>';
            }
        }
        ?>

    </section>
</body>

</html>