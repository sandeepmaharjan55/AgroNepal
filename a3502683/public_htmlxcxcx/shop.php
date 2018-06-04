<?php include('header1.php');
$select="SELECT * FROM market_tb";
$sql=mysql_query($select);
?>
<div class="wrapper">
      <div class="content">
      <div class="content_left">
      <div class="add"><a href="addpro.php">Add Product</a></div>
      <div class="title_box">Categories</div>
      <ul class="left_menu">
        <li class="odd"><a href="mech.php">Machineries</a></li>
        <li class="even"><a href="seed.php">Seeds</a></li>
        <li class="odd"><a href="fert.php">Fertilizers</a></li>
      </ul>
      
       </div>
       <div class="center_content">
      
      <div class="center_title_bar">Latest Products</div>
      <?php
	  
while($rows=mysql_fetch_array($sql)){
?>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="detail.php"><?php echo $rows['name']?></a></div>
          <div class="product_img">
          <a href="javascript:void(0);" onclick="window.location='detail.php?detail_id=<?php echo $rows['product_id']; ?>';"><img src="uploads/<?php echo $rows['pro_img']?>"  height="100px" width="100px" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce"><?php echo $rows['price']?></span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab" >
        	<a href="javascript:void(0);" onclick="window.location='detail.php?detail_id=<?php echo $rows['product_id']; ?>';">Details</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0);" onclick="window.location='buy.php?buy_id=<?php echo $rows['product_id']; ?>';">Buy</a>
        </div>
      </div>   
      <?php } 
	  $select="SELECT * FROM market_tb where count>0 order by count desc";
$sql=mysql_query($select);?>
      
      
      <div class="center_title_bar">Recommended Products</div>
      <?php
	  
while($rows=@mysql_fetch_array($sql)){
?>
      <div class="prod_box">
        <div class="top_prod_box"></div>
        <div class="center_prod_box">
          <div class="product_title"><a href="detail.php"><?php echo $rows['name']?></a></div>
          <div class="product_img">
          <a href="javascript:void(0);" onclick="window.location='detail.php?detail_id=<?php echo $rows['product_id']; ?>';"><img src="uploads/<?php echo $rows['pro_img']?>"  height="100px" width="100px" alt="" border="0" /></a></div>
          <div class="prod_price"><span class="reduce"><?php echo $rows['price']?></span></div>
        </div>
        <div class="bottom_prod_box"></div>
        <div class="prod_details_tab" >
        	<a href="javascript:void(0);" onclick="window.location='detail.php?detail_id=<?php echo $rows['product_id']; ?>';">Details</a>&nbsp;&nbsp;&nbsp;&nbsp;
            <a href="javascript:void(0);" onclick="window.location='buy.php?buy_id=<?php echo $rows['product_id']; ?>';">Buy</a>
        </div>
      </div>   
      <?php } ?>
    
        </div>
        </div>
        <div style="clear:both"></div>
</div>
<?php include('footer.php'); ?>