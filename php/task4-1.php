<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
function 今日の運勢() {
    $rand = mt_rand(1, 100); 

    if ($rand <= 5) {
        $運勢 = "大凶";
    } elseif ($rand <= 20) {
        $運勢 = "凶";
    } elseif ($rand <= 50) {
        $運勢 = "吉";
    } elseif ($rand <= 80) {
        $運勢 = "中吉";
    } else {
        $運勢 = "大吉";
    }

    echo "今日の運勢は{$運勢}です。";
}

今日の運勢();
?>

</body>
</html>