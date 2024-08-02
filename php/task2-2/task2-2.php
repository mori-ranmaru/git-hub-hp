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
            <th><?=($week[0]);?></th>
            <th><?=($week[1]);?></th>
            <th><?=($week[2]);?></th>
        </tr>
        <tr>
            <td><?=($week[3]);?></td>
            <td><?=($week[4]);?></td>
            <td><?=($week[5]);?></td>
        </tr>
        <tr>
            <td><?=($week[6]);?></td>
            <td><?=($week[7]);?></td>
            <td><?=($week[8]);?></td>
        </tr>
        <tr>
            <td><?=($week[9]);?></td>
            <td><?=($week[10]);?></td>
            <td><?=($week[11]);?></td>
        </tr>
    </table>
</body>
</html>