<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$tax = 1.1;
$pencil = 100;
$eraser = 200;
?>

<p>現在、消費税は10％です。</p>
<p>鉛筆が100円で税込<?= $pencil * $tax; ?>円です。</p>
<p>消しゴムが200円で税込<?= $eraser * $tax; ?>円です。</p>


</body>
</html>