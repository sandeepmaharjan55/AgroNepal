<?php
/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the forum can
work correctly.
******************************************************/

//We log to the DataBase
//mysql_connect('localhost", 'root', '');
//mysql_select_db('database');

$conn=@mysql_connect("mysql6.000webhost.com", "a3502683_agronep", "sandeepmaharjan");
@mysql_select_db('a3502683_agrodb',$conn);

//Username of the Administrator
$admin='admin';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Forum Home Page
$url_home = 'index.php';

//Design Name
$design = 'default';


/******************************************************
----------------------Initialization-------------------
******************************************************/
include('init.php');
?>