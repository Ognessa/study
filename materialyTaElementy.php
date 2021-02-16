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
		<a href="index.php"><img src="img/logo.png" class="logo"></a>
		<div class="menu_container">
			<a href="index.php" class="item_menu">Головна</a>
			<a href="aboutUs.php" class="item_menu">Про нас</a>
			<a href="contacts.php" class="item_menu">Контакти</a>
		</div>
	</div>
</header>

<div class="content">
	<p class="hint">Оберіть тему:</p>
	

<?php
$id = $_GET["row"];
require_once ("StudyDB.php"); 
$db_server = mysqli_connect($hostname_studyDB,$username_studyDB, $password_studyDB);
if(!$db_server)
	die(" MySQL: " . mysqli_error());
mysqli_select_db($db_server, $database_studyDB)
	or die('Cat\'t use $db_database:' . mysqli_connect_error());

$query= "SELECT * FROM themes WHERE id_less='".$id."'";
$result = mysqli_query($db_server, $query);
if (!$result) {
    die('Невірний запит: ' . mysqli_connect_error());
}

echo "<ul>";
while($row = mysqli_fetch_array($result)):
?>
	<a href="mtl_context.php?row=<?php echo $row["id_themes"];?>">
	<?php print "<li>".$row['id_themes'].". ".$row['name']."</li>";?>
    </a>
<?php
endwhile;
echo "</ul>";
?>	

</div>

</body>
</html>