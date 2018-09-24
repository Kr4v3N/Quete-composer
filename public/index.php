
<?php

require '../vendor/autoload.php';

$hello = new App\wcs\Hello();
$HelloWorld = new HelloWorld\SayHello();

echo $hello->talk(). '<br>';
echo $HelloWorld->world();
