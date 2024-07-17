<?php
  $addr = filter_input(INPUT_GET, 'addr');
  if (preg_match('/\A[[:^cntrl:]]{1,30}\z/u', $addr) !== 1) {
    die('30文字イないで十帳を入力してください。業界やタブなどの制御文字は使用できません。');
  }
