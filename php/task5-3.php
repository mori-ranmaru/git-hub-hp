<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php
  $pencil = array(
      "name" => "鉛筆", 
      "price" => 100,
      "tax" => 100 * 1.1,
  );
  $eraser = array(
      "name" => "消しゴム", 
      "price" => 200,
      "tax" => 200 * 1.1, 
  );
  ?>
<table>
    <tr>
        <th>商品名</th>
        <th>価格</th>
        <th>税込価格</th>
        
       
    </tr>
    <tr>
        <td><?= $pencil['name']; ?></td>
        <td><?= $pencil['price']; ?>円</td>
        <td><?= $pencil['tax']; ?>円</td>

    </tr>
    <tr>
        <td><?= $eraser['name']; ?></td>
        <td><?= $eraser['price']; ?>円</td>
        <td><?= $eraser['tax']; ?>円</td>
        
    </tr>
</table>
</body>
</html>