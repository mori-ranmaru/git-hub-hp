<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $stationerys = array(
      array(
          "name" => "鉛筆", 
          "price" => 100,
          "tax" => 100 * 1.1,
      ),
      array(
          "name" => "消しゴム", 
          "price" => 200,
          "tax" => 200 * 1.1, 
      )
  );//3-1では別々だった鉛筆達が筆箱（stationerys）にまとめられたイメージ

  echo "<table>";
  echo "<tr>";
  echo "<th>商品名</th>";
  echo "<th>価格</th>";
  echo "<th>税込価格</th>";
  echo "</tr>";

  foreach ($stationerys as $stationery) {
      echo "<tr>";
      echo "<td>" . $stationery['name'] . "</td>";
      echo "<td>" . $stationery['price'] . "円</td>";
      echo "<td>" . $stationery['tax'] . "円</td>";
      echo "</tr>";
  }
  echo "</table>";
?>
</body>
</html>