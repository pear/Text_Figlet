<?php
require_once 'Text/Figlet.php';

$fonts = array(
    '3-d.flf', 'alligator2.flf', 'bell.flf',
    'block.flf', 'contessa.flf', 'cybermedium.flf',
    'isometric1.flf', 'larry3d.flf', 'script.flf',
    'slant.flf'
);


$figlet = new Text_Figlet();

foreach ($fonts as $font) {
    echo 'Loading font "' . $font . '"' . "\n";
    $error  = $figlet->LoadFont($font);
    if (PEAR::isError($error)) {
        echo 'Error: ' . $error->getMessage() . "\n";
    } else {
        echo $figlet->LineEcho('Abcd') . "\n";
    }
}
?>