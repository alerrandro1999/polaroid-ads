<?php
require __DIR__ . '/vendor/autoload.php';

use App\Classes\Arquivo;
?>

<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    .container {
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .formulario {
        text-align: center;
    }

    input {
        display: block;
        margin: 10px;
    }

    input[type='submit'] {
        padding: 5px;
        width: 280px;
        border: 0;
        cursor: pointer;
        font-size: 15px;
        background-color: #222222;
        color: #fff;

    }

    .sucesso{
        background-color: green;
        padding: 10px;
        font-size: 15px;
        color: #fff;
    }

    .erro{
        background-color: red;
        padding: 10px;
        font-size: 15px;
        color: #fff;
    }

    .erro-container{
        margin: 15px 0;
    }
</style>

<title>Transferençia de Arquivos</title>
<section class="container">
    <div class="formulario">
        <form action="" method="post" enctype="multipart/form-data">
            <input type="file" name="arquivo">
            <input type="submit" value="Enviar">
        </form>
        <div class="erro-container">
            <?php
            if (isset($_FILES['arquivo'])) {
                $fileError = $_FILES['arquivo']['error'];
                $nomeArquivo = $_FILES['arquivo']['name'];
                $caminhoAtual = $_FILES['arquivo']['tmp_name'];
                $caminhoNovo = 'imagens/' . $nomeArquivo;
                Arquivo::transferenciaDeArquivo($fileError, $caminhoAtual, $caminhoNovo);
            }
            ?>
        </div>
    </div>
</section>