<?php
  session_start();
  $id = filter_input(INPUT_GET, 'id');
  if (empty($id)) $id = 'yamada';
  $_SESSION['id'] = $id;
?><body>
ログインしました(id:<?php echo
  htmlspecialchars($id, ENT_NOQUOTES, 'UTF-8'); ?>)<br>
<a href="45-002.php">パスワード</a><br>
<a fref="45-010.php">掲示板</a> <!-- 4.5.2 クリックジャッキングで使用 -->
</body>

