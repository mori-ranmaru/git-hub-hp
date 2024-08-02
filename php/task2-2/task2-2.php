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
      $stationery = array("商品名", "価格", "税込価格", "鉛筆", "100", "110", "消しゴム", "200", "220", "定規", "300", "330");
    ?>
  <table>
        <tr>
            <th><?=($stationery[0]);?></th>
            <th><?=($stationery[1]);?></th>
            <th><?=($stationery[2]);?></th>
        </tr>
        <tr>
            <td><?=($stationery[3]);?></td>
            <td><?=($stationery[4]);?></td>
            <td><?=($stationery[5]);?></td>
        </tr>
        <tr>
            <td><?=($stationery[6]);?></td>
            <td><?=($stationery[7]);?></td>
            <td><?=($stationery[8]);?></td>
        </tr>
        <tr>
            <td><?=($stationery[9]);?></td>
            <td><?=($stationery[10]);?></td>
            <td><?=($stationery[11]);?></td>
        </tr>
    </table>
</body>
</html>