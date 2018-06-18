<?php

require_once 'Autoloader.php';
require_once 'Helper.php';

/**
 * Instanciamento de classes
 */
$db         = new Conn("localhost", "crud_php", "root", "");
$cliente    = new Cliente();
$objCliente = new ServiceCliente($db, $cliente);

/*
 * Add controller CRUD
 */

if($_POST != NULL){
    
    print_r($_POST);
    
}else{
    
    Template::header();
    Template::getFormCliente();
    Template::getCliente($objCliente->show());
    Template::footer();
    
}

