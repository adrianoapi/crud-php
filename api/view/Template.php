<?php

class Template
{
    
    public static function getCliente(array $clientes)
    {
        return require __DIR__.'/cliente_listagem.php';
    }

}