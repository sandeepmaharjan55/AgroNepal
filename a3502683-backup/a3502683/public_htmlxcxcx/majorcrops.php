<?php 
include'header1.php';?><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<!-- Meta -->
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>AgroNepal Live Crop Search</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link href="style/style.css" rel="stylesheet" type="text/css" />
<link rel="icon" href="favicon.ico" type="image/x-icon">
<!-- Load Fonts -->
<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=PT+Sans:regular,bold" type="text/css" />
<!-- Load jQuery library -->
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<!-- Load custom js -->
<script type="text/javascript" src="scripts/custom.js"></script>
<style type="text/css">
<!--
body {
	font: 11px/1.4em Verdana, Arial, Helvetica, sans-serif;
}
h1 {
	color: #99CC00;
	margin: 0px 0px 5px;
	padding: 0px 0px 3px;
	font: bold 18px Verdana, Arial, Helvetica, sans-serif;
	border-bottom: 1px dashed #E6E8ED;
}
h2 {
	color: #99CC00;
	margin: 15px 0px 5px;
	padding: 0px 0px 3px;
	font: bold 14px Verdana, Arial, Helvetica, sans-serif;
	border-bottom: 1px dashed #E6E8ED;
}
a {
	color: #2D3954;
	font-size: 11px;
}
a:hover {
	color: #99CC00;
}
-->
</style>
</head>

      
        
      

<body>


<h1 align="center" class="title">AgroNepal Live Search</h1>
<h5 align="center" class="title">(searches through keywords and Descriptions shows them Live Via AgroNepal)</h5>

		<div align="center">
		  <!-- Main Input -->
		  <input type="text" id="search" autocomplete="off" placeholder="Enter Keyword Like Mountain, Hilly and Terai">
		  
		  <!-- Show Results -->
</div>
		<h4 align="center" id="results-text">Showing results for: <b id="search-string">Array</b></h4>
		<div align="center">
		  <ul id="results">
	      </ul>
</div>



        
      <?php  include('footer.php'); ?>
     