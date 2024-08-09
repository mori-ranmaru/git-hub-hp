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
      $stationery = array(
        "neme"=>"商品名", "price"=>"価格", "tax"=>"税込価格", 
      );
      $pencil = array(
        "pen" => "鉛筆", 
        "price" => "100", 
        "tax" => "110"
      );
      $eraser = array(
        "era" => "消しゴム", 
        "price" =>  "200", 
        "tax" =>"220"
      );
      $ruler = array(
        "rul"=> "定規", 
        "price" => "300", 
        "tax" =>"330"
      );
    ?>
  <table>
    <tr>
        <th><?= $stationery['neme']; ?></th>
        <th><?= $stationery['price']; ?></th>
        <th><?= $stationery['tax']; ?></th>
    </tr>
    <tr>
        <td><?= $pencil['pen']; ?></td>
        <td><?= $pencil['price']; ?></td>
        <td><?= $pencil['tax']; ?></td>
    </tr>
    <tr>
        <td><?= $eraser['era']; ?></td>
        <td><?= $eraser['price']; ?></td>
        <td><?= $eraser['tax']; ?></td>
    </tr>
    <tr>
        <td><?= $ruler['rul']; ?></td>
        <td><?= $ruler['price']; ?></td>
        <td><?= $ruler['tax']; ?></td>
    </tr>
</table>
</body>
</html>
