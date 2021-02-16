<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<title>Твоя онлайн шпаргалка</title>
    <meta charset="utf8">
	<link rel="stylesheet" type="text/css" href="css/main_style.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;600&display=swap" rel="stylesheet">
</head>
<body>

<header>
	<div class="header_container">
		
		<a href="index.php"><img src="img/logo.png" class="logo"></a>
		<div class="menu_container">
			<a href="index.php" class="item_menu">Головна</a>
			<a href="aboutUs.php" class="item_menu">Про нас</a>
			<a href="contacts.php" class="item_menu">Контакти</a>
		</div>
	</div>
</header>

<div class="content">
	<p class="hint">Оберіть предмет, який необхідно повторити:</p>

<?php
require_once ("StudyDB.php"); 
$db_server = mysqli_connect($hostname_studyDB,$username_studyDB, $password_studyDB);
if(!$db_server)
	die(" MySQL: " . mysqli_error());
mysqli_select_db($db_server, $database_studyDB)
	or die('Cat\'t use $db_database:' . mysqli_connect_error());
$query = "SELECT * FROM lessons";
$result = mysqli_query($db_server, $query);
if(!$result)
	die("Збій при доступі до БД" . mysqli_connect_error());

echo "<ul>";
while($row = mysqli_fetch_array($result)):
?>
	<a href="materialyTaElementy.php?row=<?php echo $row["id_less"];?>">
	<?php print "<li>".$row['id_less'].". ".$row['title']."</li>";?>
    </a>
<?php	
endwhile;
echo "</ul>";
?>	

</div>

</body>
</html>