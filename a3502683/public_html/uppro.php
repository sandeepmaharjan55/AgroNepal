<?php
include('conn/config.php');
	if(isset($_POST['submit'])){
		$auc_title = $_POST['itemname'];
		$auc_price = $_POST['price'];
		$auc_desc = $_POST['desc'];
		$auc_cat = $_POST['category'];
		$auc_img = $_FILES['photo']['name'];
		//$auc_qnt =$_FILES['quantity'];
		//print_r($_FILES['photo']);
		$new_auc_img = "agro".rand(0,1000000).$auc_img;

		$query = "INSERT INTO `market_tb`(name,price,disc,Category,pro_img) VALUES ('$auc_title','$auc_price','$auc_desc','$auc_cat','$new_auc_img')";
		if(mysql_query($query)){
			if(move_uploaded_file($_FILES['photo']['tmp_name'], 'uploads/'.$new_auc_img)){}
			else{
				echo 'image upload failed';
			}
			echo "insertion successful";
			echo "<script>window.location='shop.php';</script>";
		}
		else{
			echo "insertion failed";
		}
	}



?>