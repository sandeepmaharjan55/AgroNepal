<?php include('header.php');
$det_id=$_GET['detail_id'];
$query="SELECT * FROM market_tb WHERE product_id=$det_id";
$sql=@mysql_query($query);
$row=@mysql_fetch_array($sql);
?>
<link href="css/style.css" rel="stylesheet" type="text/css" />


    <div class="wrapper">
    
    <div class="img_lft"><img src="uploads/<?php echo $row['pro_img']; ?>" /></div>
    <div class="det_title"><h2><?php echo $row['name']?></h2></div>
    <div class="disc"><?php echo $row['disc']?></div>
    <div><a href="javascript:void(0);" onclick="window.location='buy.php?buy_id=<?php echo $row['product_id']; ?>';">Buy</a></div>
    </div>
    <div style="clear:both"></div>
<?php include('footer.php');?>