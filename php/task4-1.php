<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
    $rand = mt_rand(1, 100); //mt_randで1~100までの乱数を作る→出た値は$randに格納される

    //if (条件){処理;}
    if ($rand <= 5) {
        $lucky = "大凶";
    } //$randに格納された数字が1〜5なら{処理}内の$luckyに大凶が代入される

    //elseif はifの条件が『偽』でelseif(条件2)の値が『真』なら表示される
    elseif ($rand <= 20) {
        $lucky = "凶";
    } 
    elseif ($rand <= 50) {
        $lucky = "吉";
    } 
    elseif ($rand <= 80) {
        $lucky = "中吉";
    } 

    //elseは if elseif どっちも『偽』ならelseで処理される
    else {
        $lucky = "大吉";
    }
    ?>

    <h1>今日の運勢は<font color="red">
      <?= $lucky?> 
    </font>です。</h1>

</body>
</html>