<?php
define('Debug', '../debug.txt');

$input=file_get_contents('php://input');

file_put_contents(DEBUG, $input);

return response.getResponseCode();
?>
