<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
  <?php
  $name = "森はるき"; // 「””」は中に変数があったら、変数として認識する
  $age = "26"; //セミころん忘れない！！
  
  echo $name . "は" . $age . "歳です<br>"; //文字列は[ . ]を使ってつなげる

  //比較演算
  $score=50;
  if ($score >= 50) { 
    echo "変数scoreの値は50以上です<br>";}
    //<br>はただの改行

  //配列　好きなもの順に並べて表示してみた
  $fruit = array("メロン", "バナナ", "梨","葡萄");
  echo $fruit[2] .$fruit[3] .$fruit[0] .$fruit[1] ."\n";

  //条件分岐
  $score = 29; //俺の点数（29scoreが30点基準）
  if ($score >= 30) {
    echo "回避";
  } else {
    echo "赤点<br>";}

    //ループ　for
    for ($a = 0; $a <= 10; $a++) {
      echo  $a ."<br>";
    }//for (初期値; 条件式; 増減式)｛処理}

    //foreach文
    $items = array("ボール", "スパイク", "ユニ");
    echo "<ul>";
    foreach ($items as $item) {
    echo "<li>" . $item . "</li>";
    }
    echo "</ul>";
?>

</body>
</html>