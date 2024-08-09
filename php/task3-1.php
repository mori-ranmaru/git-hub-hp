<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $stationery = array(
      "name" => "商品名", 
      "price" => "価格", 
      "tax" => "税込価格", 
      "tax2" => "1Dzの価格"
  );
  $pencil = array(
      "name" => "鉛筆", 
      "price" => 100,
      "tax" => 100 * 1.1, 
      "tax2" => (100 * 1.1) * 12 
  );
  $eraser = array(
      "name" => "消しゴム", 
      "price" => 200,
      "tax" => 200 * 1.1, 
      "tax2" => (200 * 1.1) * 12 
  );
  ?>
<table>
    <tr>
        <th><?= $stationery['name']; ?></th>
        <th><?= $stationery['price']; ?></th>
        <th><?= $stationery['tax']; ?></th>
        <th><?= $stationery['tax2']; ?></th>
    </tr>
    <tr>
        <td><?= $pencil['name']; ?></td>
        <td><?= $pencil['price']; ?>円</td>
        <td><?= $pencil['tax']; ?>円</td>
        <td><?= $pencil['tax2']; ?>円</td>
    </tr>
    <tr>
        <td><?= $eraser['name']; ?></td>
        <td><?= $eraser['price']; ?>円</td>
        <td><?= $eraser['tax']; ?>円</td>
        <td><?= $eraser['tax2']; ?>円</td>
    </tr>
</table>

</body>
</html>