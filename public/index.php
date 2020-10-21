<?php
//require_once '../src/Wcs/Hello.php';
require '../vendor/autoload.php';

$hello = new App\Wcs\Hello;

echo $hello->talk();