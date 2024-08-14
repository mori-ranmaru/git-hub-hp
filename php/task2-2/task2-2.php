<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/reset.css" media="screen, projection" rel="stylesheet">
<link href="css/style.css" media="screen, projection" rel="stylesheet">

  <title>Document</title>
</head>
<body>
    <?php
      $pencil = array(
        "neme" => "鉛筆", 
        "price" => "100", 
        "tax" => "110"
      );
      $eraser = array(
        "neme" => "消しゴム", 
        "price" =>  "200", 
        "tax" =>"220"
      );
      $ruler = array(
        "neme"=> "定規", 
        "price" => "300", 
        "tax" =>"330"
      );
    ?>
  <table>
    <tr>
        <th>商品名</th>
        <th>価格</th>
        <th>税込価格</th>
    </tr>
    <tr>
        <td><?= $pencil['neme']; ?></td>
        <td><?= $pencil['price']; ?></td>
        <td><?= $pencil['tax']; ?></td>
    </tr>
    <tr>
        <td><?= $eraser['neme']; ?></td>
        <td><?= $eraser['price']; ?></td>
        <td><?= $eraser['tax']; ?></td>
    </tr>
    <tr>
        <td><?= $ruler['neme']; ?></td>
        <td><?= $ruler['price']; ?></td>
        <td><?= $ruler['tax']; ?></td>
    </tr>
</table>
</body>
</html>
