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

    if ($month >= 3 && $month <= 5) {
        $season = "春";
    } 
    //$monthは3以上かつ(&&)5以下なら〜
    elseif ($month >= 6 && $month <= 8) {
        $season = "夏";
    } 
    elseif ($month >= 9 && $month <= 11) {
        $season = "秋";
    } 
    else {
        $season = "冬";
    }
  ?>

<h1><?= $month?>月の季節は<?= $season?>です。</h1>
1.2.12.の指定の仕方が分からなかった
</body>
</html>