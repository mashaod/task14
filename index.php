<?php

include('config.php');
include('libs/Calc.php');

$a = 21;
$b = 34;
$message;

$c = new Calc;

try
{
	$arrayValues = $c->values($a, $b);
}
catch(Exception $error)
{
	$message = $error->getMessage();
	$arrayValues['numFirst'] = "NULL";
    $arrayValues['numSecond'] = "NULL"; 
    $hidTable = "hidden='hidden'";
}

include('templates/index.php');
