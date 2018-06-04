<?php include('./header.php');?>
        <div id="right">
        <div id="title">Product</div>
            <?php
  	if(isset($_GET['delete_id']))
	{
		$delete="delete from market_tb where product_id=".$_GET['delete_id'];
		mysql_query($delete);
	}
  ?>
       
        <div id="main">
        <table border="1px" bordercolor="#999999" cellspacing="0" cellpadding="5">
            <tr>
            	<th>S.N</th>
                <th>Name</th>
                <th>Category</th>
                <th>Price</th>
                <th>Discription</th>
                <th>Quantity</th>
                <th>Image</th>
                <th>Options</th>
            </tr>
           <?php
		   $i=0;
		$getdetail="Select * from market_tb";
		$result=mysql_query($getdetail);
		while($row=@mysql_fetch_array($result))
			{

			?>   
            
            <tr>
            <td><?php echo ++$i; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['Category']; ?>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['disc']; ?></td>
            <td><?php echo $row['quantity']; ?></td>
            <td><img src="uploads/<?php echo $row['pro_img']; ?>" alt="" /></td>
            <td><a href="javascript:void(0);" onclick="if(confirm('Are you sure want to delete this record'))window.location='product.php?delete_id=<?php echo $row['product_id']; ?>';"><img src="../pic/delete.png" height="35px" width="35px"/></a> | 
            <a href="javascript:void(0);" onclick="if(confirm('Are you sure want to edit this record'))window.location='proedit.php?upd_id=<?php echo $row['product_id']; ?>';"><img src="../pic/edit.png" height="36px" width="37px"/></a> </td>

           
            </tr>
             <?php }?>
        </table>
         
        </div>
        
        
        
        </div>
   </div>
   
   
   <div style="clear:both;"></div>
   <?php include('./footer.php'); ?>
