<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>１週間の配列を作り、それをwhile
文を使って箇条書きに表示して下さ
い。</title>
</head>
<body>
<?php
$week = array("日曜日", "月曜日", "火曜日", "水曜日", "木曜日", "金曜日", "土曜日");

$i = 0;

echo "<ul>";
while ($i <= 6) {
    echo "<li>" . $week[$i] . "</li>";
    $i++;}
echo "</ul>";

?>
  
</body>
</html>