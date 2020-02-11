<?php

// マジック定数 __DIR__でこの定数が呼び出されたファイルがあるディレクトリのフルパスを返す
require_once(__DIR__. '/config.php');
require_once(__DIR__. '/Bingo.php');

// インスタンス作成 名前空間myApp
$bingo = new \MyApp\Bingo();
$nums = $bingo->create();


?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>BINGO</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div id="container">
  <table>
  <tr>
    <th>B</th><th>I</th><th>N</th><th>G</th><th>O</th>
  </tr>
  <?php for ($i = 0; $i < 5; $i++) : ?>
  <tr>
    <?php for ($j = 0; $j < 5; $j++) : ?>
      <!-- $nums[列][行] 二重配列 $jが列、$iが行 -->
    <td><?php echo h($nums[$j][$i]); ?></td>
    <?php endfor; ?>
  </tr>
  <?php endfor; ?>
  </table>
</div>
  
</body>
</html>