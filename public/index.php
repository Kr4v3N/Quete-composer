<?php
require '../vendor/autoload.php';
require '../src/Wcs/Hello.php';
$hello = new \HelloWorld\SayHello();
echo $hello->world() . '<br/>';
$hello = new \App\Wcs\Hello();
echo $hello->talk();
