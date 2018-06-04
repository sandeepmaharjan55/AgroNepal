<?php 
 include"./header.php";
$upd_id=$_GET['upd_id'];
?>
<div id="head">Product Update</div>
</div>


 <link rel="stylesheet" type="text/css" href="../styles/stylee.css"/>
<?php
 if(isset($_POST['submit']))
{ ?>
 
<?php


$proheader= $_POST['proheader'];

     
   $query = "UPDATE market_tb SET name='$proheader' where product_id='$upd_id'";
if(mysql_query($query))
{
?> 
<div >
		<img src="../images/correct.png" height="16" width="16" /> &nbsp;
        <font color="#339900" size="+1">Post update successfully!</font> 
<script>window.location='post.php';</script>
</div>

 <?php 
}
 } 
 ?>
 

<?php 
 $sql="select * from market_tb WHERE product_id=$upd_id";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

  </br>



<form action="#" method="post" name="productform">
<input type="hidden" name="pro_id" value="<?php echo $upd_id;?>">


<table   align="center" style="border:solid #999 2px;" width="29%">
<tr>
<td>Header</td>
<td><input type="text" name="proheader" value="<?php echo $row['name'];?>"></td>
</tr>
<tr>
<td>Discription</td>
<td><textarea name="pdes"><?php echo $row['disc'];?></textarea></td>
</tr>
<tr>
<td>Price</td>
<td><input type="text" name="price" value="<?php echo $row['price'];?>"></td>
</tr>


<tr><td>&nbsp;</td>
<td><input type="submit" name="submit" value="update" id="buttom"></td>
</tr></table>
</form>
<?php include"./footer.php";?>