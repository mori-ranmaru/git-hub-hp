<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
$month = mt_rand(1, 12);
switch ($month) {
  case 3:
  case 4:
  case 5:
     echo "$month 月は春です";
  break;

  case 6:
  case 7:
  case 8:
     echo "$month 月は夏です";
  break;

  case 9:
  case 10:
  case 11:
     echo "$month 月は秋です";
  break;

  case 12:
  case 1:
  case 2:
     echo "$month 月は冬です";
  break;
};
 ?>
</body>
</html>