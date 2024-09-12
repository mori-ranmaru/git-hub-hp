<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<?php
// max_number関数を定義
function max_number($n1, $n2) {
    // $n1と$n2のうち大きい方の値を返す
    return ($n1 > $n2) ? $n1 : $n2;
}

// $aと$bに値を代入
$a = 9;
$b = 21;

// max_number関数を使って$aと$bの最大値を求める
$max_value = max_number($a, $b);

// 最大値を出力
echo "最大値は: $max_value";
?>

</body>
</html>