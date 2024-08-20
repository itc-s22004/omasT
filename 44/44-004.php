<?php
  header('Content-Type: text/html; charset=UTF-8');
  $author = $_GET['author'];
  try {
    $opt = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,PDO::MYSQL_ATTR_MULTI_STATEMENTS => false, PDO::ATTR_EMULATE_PREPARES => false);
    $db = new PDO("mysql:host=127.0.0.1;dbname=wasbook;charset=utf8", "root", "wasbook", $opt);
    $sql = "SELECT * FROM books WHERE author = ? ORDER BY id";
    $ps = $db->prepare($sql);
    $ps->bindValue(1, $author, PDO::PARAM_STR);
    $ps->execute();
?>
<html>
<body>
<?php
  if ($ps->rowCount() > 0) {
    $_SESSION['id'] = $id;
    echo 'ログイン成功';
  } else {
    echo 'ログイン失敗';
  }
  // pg_close($con);
?>
</body>
</html>

