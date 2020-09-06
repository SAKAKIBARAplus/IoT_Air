<?php

$value = 10; print($value);
define('DEBUG', '../debug.txt');

$input=file_get_contents('php://input');

file_put_contents(DEBUG, $input);

//return response.getResponseCode();
?>
