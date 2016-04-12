<?php
Header("Content-type: image/jpeg; charset=utf-8");

$im = imagecreatefromjpeg("./friend.jpg");


imagealphablending($im, true);
$text1 = $_GET['text1'] ? $_GET['text1'] : '第一句话';
$text2 = $_GET['text2'] ? $_GET['text2'] : '第二句话';
$text3 = $_GET['text3'] ? $_GET['text3'] : '第三句话';

imagefttext($im, 14, 0, 70, 30, $red, 'SIMFANG.TTF', $text1);
imagefttext($im, 14, 0, 230, 60, $red, 'SIMFANG.TTF', $text2);
imagefttext($im, 14, 0, 70, 250, $red, 'SIMFANG.TTF', $text3);

Imagejpeg($im);
ImageDestroy($im);
?>
