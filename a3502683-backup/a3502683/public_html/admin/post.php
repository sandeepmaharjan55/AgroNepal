<?php include('./header.php');?>
        <div id="right">
        <div id="title">POST</div>
            <?php
  	if(isset($_GET['delete_id']))
	{
		$delete="delete from post_tb where post_id=".$_GET['delete_id'];
		mysql_query($delete);
	}
  ?>
       
        <div id="main">
        <table border="1px" bordercolor="#999999" cellspacing="0" cellpadding="5">
            <tr>
            	<th>S.N</th>
                <th>Topic</th>
                <th>Containt</th>
                <th>Date</th>
                <th>Picture</th>
                <th>Options</th>
            </tr>
           <?php
		   $i=0;
		$getdetail="Select * from post_tb";
		$result=mysql_query($getdetail);
		while($row=@mysql_fetch_array($result))
			{

			?>   
            
            <tr>
            <td><?php echo ++$i; ?></td>
            <td><?php echo $row['post_header']; ?></td>
            <td><?php echo $row['post_cont']; ?></td>
            <td><?php echo $row['post_date']; ?></td>
            <td><?php echo $row['img']; ?></td>
            <td><a href="javascript:void(0);" onclick="if(confirm('Are you sure want to delete this record'))window.location='post.php?delete_id=<?php echo $row['post_id']; ?>';"><img src="../pic/delete.png" height="35px" width="35px"/></a> | 
            <a href="javascript:void(0);" onclick="if(confirm('Are you sure want to edit this record'))window.location='postedit.php?upd_id=<?php echo $row['post_id']; ?>';"><img src="../pic/edit.png" height="36px" width="37px"/></a> </td>

           
            </tr>
             <?php }?>
        </table>
         
        </div>
        
        
        
        </div>
   </div>
   
   
   <div style="clear:both;"></div>
   <?php include('./footer.php'); ?>
