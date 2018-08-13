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
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <form action="form.php" method="get">
	A: <input type="text" name="a"><br>
	B: <input type="text" name="b"><br>
	C: <input type="text" name="c"><br>
	<input type="submit" value="ОТправить" name="Submit">
</form>
</body>
</html>