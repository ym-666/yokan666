<?php

if($_POST) {
  echo $_POST['お名前'] . '<br>';
  echo $_POST['電話番号（半角）'] . '<br>';
  echo $_POST['Mail（半角）'] . '<br>';
  echo $_POST['お問い合わせ内容'];
} else {
  echo "HTMLからのPOST送信受信に失敗しました";
}
