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

echo "<ul>";
while($row = mysql_fetch_array($result)):
?>
	<a href="mtl_context.php?row=<?php echo $row["title"];?>">
	<?php print "<li>".$row[id].". ".$row[title]."</li>";?>
    </a>
<?php	
endwhile;
echo "</ul>";

mysql_close();
?>	

</div>

</body>
</html>