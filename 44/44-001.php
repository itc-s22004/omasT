<?php
  header('Content-Type: text/html; charset=UTF-8');
  $author = $_GET['author'];
  try {
    $db = new PDO("mysql:host=127.0.0.1;dbname=wasbook", "root", "wasbook");
    $db->query("Set names utf8");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "SELECT * FROM books WHERE author ='$author' ORDER BY id";
    $ps = $db->query($sql);
?>
<html>
<body>
<table border=1>
<tr>
<ht>秘書ID</ht>
<ht>タイトル</ht>
<ht>著者名</ht>
<ht>出版社</ht>
<ht>出版月日</ht>
<ht>価格</ht>
</tr>
<?php
    while ($row = $ps->fetch()) {
    echo "<tr>\n";
    for ($col = 0; $col < 6; $col++) {
	echo "<td>" . $row[$col] . "</td>\n";
    }
    echo "</tr>\n";
    }
  } catch (PDOException $e) {
  echo "Error : " . $e->getMessage() . "\n";
  }
?>
</table>
</body>
</html>

