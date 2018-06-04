<?php include('./header.php');?>
        <div id="right">
        <div id="title">User Management</div>
            <?php
  	if(isset($_GET['delete_id']))
	{
		$delete="delete from reg_tb where user_id=".$_GET['delete_id'];
		@mysql_query($delete);
	}
	
	if(isset($_GET['apv_id']))
{
	$dupesql = "SELECT * FROM login where username =" .$_GET['$apv_id'];
$duperaw = @mysql_query($dupesql);

if(@mysql_num_rows($duperaw)>0){
echo "<script> alert('Allready approved!!!');";
echo "window.location='user.php';</script>";

}
else{
	$name=$_GET['username'];
	$pwd=$_GET['password'];	
	$mail=$_GET['email'];	
$insert="insert into login(username,password,email) VALUES('$name','$pwd','$mail')";
@mysql_query($insert);
echo "<script> alert('suceffully register!!!');";
echo "window.location='user.php';</script>";
}
	
}
  ?>
       
        <div id="main">
        <form method="post">
        <table border="1px" bordercolor="#999999" cellspacing="0" cellpadding="5" >
            <tr>
            	<th>S.N</th>
                <th>User</th>
                <th>Gender</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Options</th>
            </tr>
           <?php
		   $i=0;
		$getdetail="Select * from reg_tb";
		$result=@mysql_query($getdetail);
		while($row=@mysql_fetch_array($result))
			{
				$username=$row['user'];

			?>   
            
            <tr>
            <td><?php echo ++$i; ?></td>
            <td><?php echo $row['user']; ?></td>
            <td><?php echo $row['sex']; ?></td>
            <td><?php echo $row['email_id']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <!--<td><a href="javascript:void(0);" onclick="if(confirm('Are you sure want to Approve this record'))window.location='user.php?apv_id=<?php //echo $row['user_id']; ?>';"><!--<img src="../pic/edit.png" height="36px" width="37px"/>--><!--<font color="#00CC00">Aprove</font></a>-->
            
            
            <td><a href="app.php?username=<?php echo $username;?>"> Approve</a>
            
             <a href="javascript:void(0);" onclick="if(confirm('Are you sure want to Remove this record'))window.location='user.php?delete_id=<?php echo $row['user_id']; ?>';"><!--<img src="../pic/delete.png" height="35px" width="35px"/>--><font color="#FF0000">Deny</font></a>
             </td>

           
            </tr>
             <?php }?>
        </table>
         </form>
        </div>
        
        
        
        </div>
   </div>
   
   
   <div style="clear:both;"></div>
   <?php include('./footer.php'); ?>
