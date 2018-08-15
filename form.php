// из ютуб канала Вячеслава Сычева, урок №8 HTTP, формы
<?php

//phpinfo();

//print_r($_SERVER);
?>


<!DOCTYPE html>
<html>
<head>
	<title>Урок№8, Формы</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<?php var_dump($_POST); var_dump($_FILES); ?>
	<form action="form.php" method="post" enctype="multipart/form-data">
    <!--<form action="form.php" method="get">-->
	A: <input type="text" name="a"><br>
	B: <input type="text" name="b"><br>
	C: <input type="text" name="c"><br>
	<input type="submit" value="ОТправить" name="Submit">
	<input type="file" name="file">
</form>
</body>
</html>