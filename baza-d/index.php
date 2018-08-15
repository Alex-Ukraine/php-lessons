<?php
$con=mysqli_connect("localhost","root","","testsite");
mysqli_set_charset($con, "utf8");

// Check connection
if (mysqli_connect_errno()) {
	echo "Failed to connect to MongoDB: ".mysqli_connect_error();
}

//$query = "INSERT INTO news_category VALUES (NULL, 'Категория 3', 'Описание 2', 1,1);";

//$info = mysqli_query($con, $query);

//$query = "DELETE FROM news WHERE 'date' < DATE_SUB(CURDATE(), INTERVAL 2 MINUTE);" ; 

// DESC - descending (убывание), ASC - ascending (возрастание)

//$query = "DELETE FROM news_category ORDER BY id DESC LIMIT 5;";

//$query = "UPDATE news SET status='1';" ;

//$query = "UPDATE news SET h1='новость 3' WHERE h1='новость 1';";

$query = " SELECT * FROM news_category; ";

$info = mysqli_query($con, $query);

$count=mysqli_num_rows($info);

if ($count) {
	while ($row = mysqli_fetch_array($info)){  //возвращает одну строку
		echo $row['id']."<br>";
	}
}

echo "<br>".$count."<br>";

var_dump($info);

echo mysqli_affected_rows($con);

// Агрегатные функции COUNT, SUM, AVG, MAX, MIN
//SELECT COUNT(*) FROM `news` WHERE `category_id`='1'; SELECT MAX(id) as qwe FROM `news_category`
//SELECT name, COUNT(*) FROM `user` GROUP BY name