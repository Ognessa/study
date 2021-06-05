<?php
# FileName="Connection_php_mysql.htm"
# Type="MYSQL"
# HTTP="true"
$hostname_studyDB = "localhost";
$database_studyDB = "study";
$username_studyDB = "root";
$password_studyDB = "";
$studyDB = mysql_connect($hostname_studyDB, $username_studyDB, $password_studyDB) or trigger_error(mysql_error(),E_USER_ERROR); 
?>