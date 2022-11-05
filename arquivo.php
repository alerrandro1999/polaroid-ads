<?php
require __DIR__ . '/vendor/autoload.php';

use App\Classes\Arquivo;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transferençia de Arquivos</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <input type="submit" value="Enviar">
    </form>

    <?php
        if (isset($_FILES['arquivo'])) {
            $nomeArquivo = $_FILES['arquivo']['name'];
            $caminhoAtual = $_FILES['arquivo']['tmp_name'];
            $caminhoNovo = 'imagens/'.$nomeArquivo;
            Arquivo::transferenciaDeArquivo($caminhoAtual, $caminhoNovo);
        }
    ?>
</body>
</html>