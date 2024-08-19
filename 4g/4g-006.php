<?php
  $zip = $_GET['zip'];
  $json = '{"message":"郵便番号がみつかりません:' . $zip . '"}';
  header('Content_type: text/javascript; charset=utf-8');
  echo "callback_zip($json);";
