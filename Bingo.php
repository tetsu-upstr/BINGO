<?php

namespace MYApp;

class Bingo {

  public function create() {
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
    return $nums;
  }

}