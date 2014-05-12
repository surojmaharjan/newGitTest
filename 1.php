<?php

//PHP OOP Tutorial | Interfaces

echo "<p>This is simple Example of interface</p>";

require_once('interfaces/DotSyntax.interface.php');
require_once('interfaces/Parsed.interface.php');
require_once('interfaces/Compiled.interface.php');
require_once('PHP.class.php');
require_once('Java.class.php');
require_once('Python.class.php');

$php = new PHP();
$java = new Java();
$python = new Python();
?>
