<?php include('includes/sessionCheck.php'); 
include ('../conn/config.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="shortcut icon" href="../favicon.ico" />
<title>Admin AgroNepal</title>
</head>
<link rel="stylesheet" type="text/css" href="css/style.css" />
<body>

<div id="wrapper">
	<div id="header"><!--<img src="../pic/cp.jpg" />--></div>
    <div style="clear:both;"></div>
    
    
    <div id="nav">
    	<ul>
        	<li><a href="main.php">Home</a></li>
          
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>
    <div style="clear:both;"></div>
   	<div id="container">
   		<div id="left">
        <div id="title1">Navigation</div>
        		<?php include('includes/navleft.php'); ?>
        </div>