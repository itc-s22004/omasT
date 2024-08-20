<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitioinal//EN">
<html>
<head><title>ゴミ受付センター</title></head>
<body>
<form action="" method="POST">
氏名<input size="20" name="name" value="<?php echo @$_POST['name'];
?>"><br>
住所<input size="20" name="addr" value="<?php echo @$_POST['addr'];
?>"><br>
電話番号<input size="20" name="tel" value="<?php echo @$_POST['tel'];
?>"><br>
品目<input size="10" name="kind" value="<?php echo @$_POST['kind'];
?>">
数量<input size="5" name="num" value="<?php echo @$_POST['num']; ?>">
<br>
</body>
</html>
