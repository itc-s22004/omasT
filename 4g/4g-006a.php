<?php
  $zip = $_GET['zip'];
  $json = json_encode(array("message" => "郵便番号が見つかりません:" . $zip));
  header('Content_type: text/javascript; charset=utf-8');
  echo "callback_zip($json);";
