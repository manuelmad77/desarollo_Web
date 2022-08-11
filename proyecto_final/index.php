<?php
require "config.php";
require "funciones.php";
$funciones = new funciones($mysqli);
$modulo = isset($_GET['modulo']) ? $_GET['modulo'] : 'inicio';
require 'app/index.php';
?>