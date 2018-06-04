<?php include('header.php') ?><?php
include('login1.php'); // Includes Login Script
if($count==1){

header("location: home.php");
}
?>


<!DOCTYPE html>
<html>
<head>
<title>AgroNepal</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
<div id="main">
<h1>AgroNepal Login</h1>
<div id="login">
<h2>Login Form</h2>
<form action="" method="post">
<label>UserName :</label>
<input id="name" name="username" placeholder="username" type="text">
<label>Password :</label>
<input id="password" name="password" placeholder="**********" type="password">
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>

</div>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</body>
</html>



<?php include('footer.php') ?>