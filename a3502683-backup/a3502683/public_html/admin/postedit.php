<?php 
 include"./header.php";
$upd_id=$_GET['upd_id'];
?>
<div id="head">Post Update</div>
</div>


 <link rel="stylesheet" type="text/css" href="../styles/stylee.css"/>
<?php
 if(isset($_POST['submit']))
{ ?>
 
<?php


$postheader= $_POST['pheader'];

     
   $query = "UPDATE post_tb SET post_header='$postheader' where post_id='$upd_id'";
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
 $sql="select * from post_tb WHERE post_id=$upd_id";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
?>

  </br>



<form action="#" method="post" name="postform">
<input type="hidden" name="posst_id" value="<?php echo $upd_id;?>">


<table   align="center" style="border:solid #999 2px;" width="29%">
<tr>
<td>Header</td>
<td><input type="text" name="pheader" value="<?php echo $row['post_header'];?>"></td>
</tr>
<tr>
<td>Containt</td>
<td><textarea name="pdes"><?php echo $row['product_cont'];?></textarea></td>
</tr>
<tr>
<td>Date</td>
<td><input type="text" name="pdate" value="<?php echo $row['post_date'];?>"></td>
</tr>
<tr>
<td>Image</td>
<td><input type="text" name="pimg" value="<?php echo $row['img'];?>"></td>
</tr>

<tr><td>&nbsp;</td>
<td><input type="submit" name="submit" value="update" id="buttom"></td>
</tr></table>
</form>
<?php include"./footer.php";?>