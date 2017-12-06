<?php
$dbParams = require (
	'db.php'
);

$db=new PDO(
	"mysql: host=localhost; dbname=".
	$dbParams['database'].
	"; charset=utf8",// dbname- имя бд, host- имя хоста, charset-кодировка  (подключились к бд в резульитате создался PDO)
	$dbParams['username'],
	$dbParams['password']
); 
$students=$db
	
	->query('select * FROM `student`')
	-> fetchAll (PDO :: FETCH_ASSOC);
	foreach ($students as $student) {
		echo "<p>".
		htmlspecialchars ($student ['lastName']).
		"</p>";
	}
	


