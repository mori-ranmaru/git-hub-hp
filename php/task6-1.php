<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $str = "気合いだ！";
function showString(int $num, string $str): void {
    for ($i = 0; $i < $num; $i++) {
        echo $str . PHP_EOL;
    }
}
showString(3, $str);
?>


</body>
</html>