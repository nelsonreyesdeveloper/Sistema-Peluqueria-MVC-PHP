<?php

require __DIR__ . '/../vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createMutable(__DIR__."/../");
$dotenv->load();


require 'funciones.php';
require 'database.php';



// Conectarnos a la base de datos
use Model\ActiveRecord;

ActiveRecord::setDB($db);
