<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
define('TAX',1.1);
define('TAX1',10);
$pencil = '鉛筆';
$pencil1 = 100;
$pencil2 = 110;
$eraser = '消しゴム';
$eraser1 = 200;
?>

<p>現在、消費税は<?= TAX1;?>%です。</p>
<p><?= $pencil;?>が<?= $pencil1;?>円で税込<?= $pencil2;?>円です。</p>
<p><?=$eraser?>が<?=$eraser1?>円で税込<?= $eraser1 * TAX;?>円です。</p>

</body>
</html>