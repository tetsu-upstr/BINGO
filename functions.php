<?php

// 表示する際は必ずエスケープ処理をする
function h($s) {
  return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}