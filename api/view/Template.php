<?php

class Template
{
    
    public static function getCliente()
    {
        return file_get_contents(__DIR__.'/cliente_listagem.php');
    }

}