<?php

namespace App\Classes;

class Arquivo
{
    public static function transferenciaDeArquivo($fileError, $caminhoAtual, $caminhoNovo)
    {
        self::erros($fileError);
        move_uploaded_file($caminhoAtual, $caminhoNovo);
    }

    public static function erros($fileError)
    {
        switch ($fileError) {
            case '0':
                echo "<span class='sucesso'>Arquivo movido com sucesso</span>";
                break;
            case '1':
                echo "<span class='erro'> Error: Mova apenas um arquivo</span>";
                exit;
                break;
            case '2':
                echo "<span class='erro'>Error: Arquivo muito grande</span>";
                exit;
                break;
            case '3':
                echo "<span class='erro'>Error: O upload do arquivo foi feito parcialmente.</span>";
                exit;
                break;
            case '4':
                echo "<span class='erro'>Error: Nenhum arquivo foi enviado</span>";
                exit;
                break;
            case '6':
                echo "<span class='erro'>Error: Pasta temporária ausente</span>";
                exit;
                break;
            case '7':
                echo "<span class='erro'>Error: Falha ao escrever o arquivo no disco</span>";
                exit;
                break;
            case '8':
                echo "<span class='erro'>Error: Uma extensão do PHP interrompeu o upload do arquivo.</span>";
                exit;
                break;
        }
    }
}
