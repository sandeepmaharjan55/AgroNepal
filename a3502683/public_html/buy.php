<?php include('header.php');
$buy_id=$_GET['buy_id'];
$query="SELECT * FROM market_tb WHERE product_id=$buy_id";
$sql=@mysql_query($query);
$row=@mysql_fetch_array($sql);
$qut=$row['quantity'];
$count=$row['count'];
 if(isset($_POST['buy']))
 {	$count++;
	 $qunt=$_POST['qunt'];
	 $tot=$qut-$qunt;
	 echo $tot;
	 $loc=$_POST['loc'];
	 $query1="insert into sales_tb (product_id,qunt,loc) values ('$buy_id','$qunt','$loc')";
	 if(@mysql_query($query1))
{
?> 

<div >
        <font color="#339900" size="+1">We Will info soon</font> 
		<script>window.location='#';</script>
</div>

 <?php 
}

$query2= "UPDATE market_tb SET quantity='$tot',count='$count' where product_id='$buy_id'";

if(@mysql_query($query2))
{
?> 
<div >
		<img src="../images/correct.png" height="16" width="16" /> &nbsp;
        
<script>window.location='#';</script>
</div>

 <?php 
}
{
?> 
<div >
		<img src="../images/correct.png" height="16" width="16" /> &nbsp;
        <font color="#339900" size="+1">Post update successfully!</font> 
<script>window.location='shop.php';</script>
</div>

 <?php 
}
 }
?>
<link href="css/style.css" rel="stylesheet" type="text/css" />

 
    <div class="wrapper">
    <form action="#" method="post">
    <div class="img_lft"><img src="uploads/<?php echo $row['pro_img']; ?>" /></div>
    <div class="det_title"><h2><?php echo $row['name']?></h2></div>
    <div class="disc"><?php echo $row['disc']?>
    <p>
    <div>Rs.<?php echo $row['price'] ?></div></p></div>
    <table>
    <tr>
    <td>Quantity</td>
    <td>
    <input type="number" width="50px" name="qunt" min="1" max="<?php echo $row['quantity']?>"></td></tr>
    <tr>
    <td>Location</td>
    <td> <input type="text" name="loc"> </td></tr>
    <tr ><td>
    <div class="bottom"><input type="submit" name="buy" value="Buy" ></div></td></tr>
    </table>
    </form>
    </div>
    <div style="clear:both"></div>
    
<?php include('footer.php');?>