<!DOCTYPE HTML PUBLIC "-//W3C//DTD html 4.0 Transitional//EN".
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title>Metode Post</title>
</head>

<body>

<form action="<?php $_SERVER['PHP SELF'];?>" method="post">
Nama
<input type="text" name="nama"/> <br/>

<input type="submit" value="OK"/>
</form>

<?php
if (isset($_POST['nama'])) {
echo 'Hallo, ' . $_POST['nama'];
}
?>

</body>
</html>