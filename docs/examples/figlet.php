<?php

/**
 * Text_Figlet example script.
 *
 * Renders "Hello, world!" using slant.flf font
 *
 * @package Text_Figlet
 */

include_once 'Text/Figlet.php';

$figlet = new Text_Figlet();
if (PEAR::isError($error = $figlet->loadFont('slant.flf'))) {
    echo 'Error: ', $error->getMessage();
} else {
    echo $figlet->lineEcho("Hello, world!");
}
?>
