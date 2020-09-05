<?php

// Composerでインストールしたライブラリを一括読み取り
require_once __DIR__ . '/vendor/autoload.php';

//アクセストークンを使いCurlHTTPClientをインスタンス化
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient(getenv('CHANNEL_ACCESS_TOKEN'));

//CurlHTTPClientとシークレットを使いLINRBotをインスタンス化
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => getenv('CHANNEL_SECRET')]);

//LINE Message APIがリクエストに付与した署名を取得
$signature = $_SERVER['HTTP_' . \LINE\LINEBot\Constant\HTTPHeader::LINE_SIGNATURE];

//書面が正当化チェック。正当であればリクエストをぱーすし配列へ
$events = $bot->parseEventRequest(file_get_contents('php://input'),$signature);

//配列に格納された各イベントをループで処理
foreach ($events as $event){
  //テキストを返
  $bot->replyText($event->getReplyToken(), 'TextMessage');
}
?>
