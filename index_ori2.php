<?php

// Composerでインストールしたライブラリを一括読み取り
require_once __DIR__ . '/vendor/autoload.php';

//POSTメソッドで返される値を取得、表示
$inputString = file_get_contents('php://input');
error_log($inputString);

?>
