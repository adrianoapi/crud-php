<?php

require_once 'Autoloader.php';
require_once 'Helper.php';
$db = new Conn("localhost", "crud_php", "root", "");

$cliente    = new Cliente();
$objCliente = new ServiceCliente($db, $cliente);

echo Template::getCliente();