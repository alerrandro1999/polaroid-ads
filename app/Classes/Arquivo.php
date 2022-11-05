<?php

namespace App\Classes;

class Arquivo
{
    public static function transferenciaDeArquivo($caminhoAtual, $caminhoNovo)
    {
        if (move_uploaded_file($caminhoAtual, $caminhoNovo)) {
            echo 'Arquivo movido';
        }else{
            echo 'Erro';
        }
    }
}