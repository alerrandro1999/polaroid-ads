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
    <div class="scroll-magico">
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
                        <a class="botao-download" href="' . $pasta . $arquivo . '" download>Baixa Imagem</a>
                    </div>';
                }
            }
            ?>

        </section>
    </div>

    <script src="jquery/jquery.js"></script>
    <script>
        var tamanho = document.body.clientHeight;

        // $(function() {
        //     if ($(window).scrollTop() + $(window).height() == $(document).height()) {
        //         $('html, body').animate({
        //             scrollTop: 0
        //         }, 8000);
        //     } else {
        //         $('html, body').animate({
        //             scrollTop: $(document).height() - $(window).height()
        //         }, 8000, function() {});
        //     }
        // });

        // setInterval(() => {
        //     $('html, body').animate({
        //         scrollTop: -tamanho
        //     }, 50000);
        // }, Infinity);

        // setInterval(() => {
        //     $('html, body').animate({
        //         scrollTop: tamanho
        //     }, 50000);
        // }, Infinity);


    </script>
</body>

</html>