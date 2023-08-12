<?php
$controller = $_GET ['c'].'controller';
$method = $_GET ['m'];
require_once('./controllers/'.$controller.'.php');
$obj= new $controller();
$obj -> $method();
