<?php

/*
$nums[][]
B: $nums[0] 1-15
I: $nums[1] 16-30
...
O: $nums[4]

$num[$i] $i * 15 + 1 〜 $i * 15 + 15
*/

// 配列を初期化
$nums = [];

// 配列をループで取得
for ($i = 0; $i < 5; $i++) {

  // range関数（引数（a, b)の範囲の数値を取得）
  $col = range($i * 15 + 1, $i * 15 + 15);

  // shuffle関数（引数の数値をランダムで取得）
  shuffle($col);

  // array_slice関数（配列の一部を切り取って展開（ array_slice ( 配列 , 開始位置 , 個数) )
  $nums[$i] = array_slice($col, 0, 5);

}

$nums[2][2] = "FREE";

// var_dump($nums);
// exit;

// 表示する際は必ずエスケープ処理をする
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

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