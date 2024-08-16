<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
    $rand = mt_rand(1, 100); 

    if ($rand <= 5) {
        $lucky = "大凶";
    } 
    elseif ($rand <= 20) {
        $lucky = "凶";
    } 
    elseif ($rand <= 50) {
        $lucky = "吉";
    } 
    elseif ($rand <= 80) {
        $lucky = "中吉";
    } 
    else {
        $lucky = "大吉";
    }
    ?>

    <h1>今日の運勢は<font color="red">
      <?= $lucky?>
    </font>です。</h1>

</body>
</html>