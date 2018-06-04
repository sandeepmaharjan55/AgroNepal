<?php
$mysql_hostname = "mysql6.000webhost.com";
$mysql_user = "a3502683_agronep";
$mysql_password = "sandeepmaharjan";
$mysql_database = "a3502683_agrodb";
$prefix = "";
$bd =@mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Could not connect database");
@mysql_select_db($mysql_database, $bd) or die("Could not select database");
?>