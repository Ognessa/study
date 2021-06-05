<!DOCTYPE html>
<html>
<head>
	<title>Твоя онлайн шпаргалка</title>
    <meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<header>
	<div class="header_container">
		<img src="img/logo.png" class="logo">
		<div class="menu_container">
			<a href="index.html" class="item_menu">Головна</a>
			<a href="aboutUs.html" class="item_menu">Про нас</a>
			<a href="contacts.html" class="item_menu">Контакти</a>
		</div>
	</div>
</header>

<div class="content">
	<p class="hint">Оберіть тему:</p>
	

<?php
$_id = $_GET["row"];
require_once ("Connections/studyDB.php"); 
$db_server = mysql_connect($hostname_studyDB,$username_studyDB, $password_studyDB);
if(!$db_server)
	die(" MySQL: " . mysql_error());
mysql_select_db($database_studyDB,$db_server)
	or die('Cat\'t use $db_database:' . mysql_error());
$query = "SELECT * FROM mattael";
$result = mysql_query($query);
if(!$result)
	die("Збій при доступі до БД" . mysql_error());

$query= "SELECT * FROM mattael WHERE id = ".$_id;
$result = mysql_query($query);
if (!$result) {
    die('Невірний запит: ' . mysql_error());
}
while($row = mysql_fetch_array($result)):
echo $_GET["row"]=$row["title"],"<br>";
echo $_GET["row"]=$row["definion"],"<br>";
echo $_GET["row"]=$row["parameters"],"<br>";
echo $_GET["row"]=$row["ps"],"<br>";
endwhile;

mysql_close();
?>	

</div>

</body>
</html>