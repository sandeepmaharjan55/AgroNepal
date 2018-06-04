<?php
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
$connection=@mysql_connect("localhost", "root", "");
@mysql_select_db('agro_db',$connection);
// Selecting Database
$db = @mysql_select_db("agro_db", $connection);

if (version_compare(PHP_VERSION, "5.4.0") >= 0) {
    $sess = session_status();
    if ($sess == PHP_SESSION_NONE) {
        session_start();
    }
} else {
    if (!$_SESSION) {
        session_start();
    }
}
//session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=@mysql_query("select username from login where username='$user_check'", $connection);
$row = mysql_fetch_assoc($ses_sql);
$login_session =$row['username'];
if(!isset($login_session)){
mysql_close($connection);// Closing Connection

header('Location: index.php'); // Redirecting To Home Page
}
?>