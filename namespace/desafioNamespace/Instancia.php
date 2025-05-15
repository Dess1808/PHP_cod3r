<?php
namespace App;

require_once('Usuario.php');

//organizando com use as
use \Classe\Instanciavel\Usuario as user;

$obj = new user\Usuario('Gabriel', 26, 'Dess');
echo $obj->apresentar() . PHP_EOL;