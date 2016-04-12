<?php
Header("Content-type: image/jpeg; charset=utf-8");

$im = imagecreatefromjpeg("./friend.jpg");


imagealphablending($im, true);
$text1 = '你是哪个公司的？';
$text2 = '爱奇艺';
$text3 = '送我一年会员吧';

imagefttext($im, 14, 0, 70, 30, $red, 'SIMFANG.TTF', $text1);
imagefttext($im, 14, 0, 230, 60, $red, 'SIMFANG.TTF', $text2);
imagefttext($im, 14, 0, 70, 250, $red, 'SIMFANG.TTF', $text3);

Imagejpeg($im);
ImageDestroy($im);
?>
