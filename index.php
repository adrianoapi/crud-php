<?php

require_once 'Autoloader.php';
require_once 'Helper.php';

/**
 * Instanciamento de das classes
 */
$db         = new Conn("localhost", "crud_php", "root", "");
$cliente    = new Cliente();
$objCliente = new ServiceCliente($db, $cliente);

/*
 * Add controller CRUD
 */

Template::header();

if($_POST != NULL){
    echo "POST";
}else{
    Template::getFormCliente();
    Template::getCliente($objCliente->show());
}

Template::footer();