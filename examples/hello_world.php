<?php
require_once 'Text/Figlet.php';

$figlet = new Text_Figlet();
$error  = $figlet->LoadFont('slant.flf');
if (PEAR::isError($error)) {
    echo 'Error: ' . $error->getMessage() . "\n";
} else {
    echo $figlet->LineEcho('Hello, world!') . "\n";
}
?>