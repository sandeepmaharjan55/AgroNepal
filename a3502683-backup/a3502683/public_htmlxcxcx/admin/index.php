<head>
<title>ArgoNepal</title>
<link rel="icon" href="../pic/leaf_logo.png"/>
</head><?php
session_start();
include '../conn/config.php';
if(isset($_POST['login']))
{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$checkdata="select * from admin_tb where name='".$username."' and password='".$password."'";
	
	$result=@mysql_query($checkdata);
	if($row=mysql_num_rows($result)>0)
		{
			$setUser=mysql_fetch_array($result);
		
			$_SESSION['loggedin']='yes';
	
			
			$_SESSION['user']=$setUser['username'];
			
			echo "<script>window.location='./main.php';</script>";
	}
else
{
	echo "<script>window.location='#'</script>";
}
}
?>
<script type="text/javascript">
function validate()
{
 if(document.form.username.value == ""&&document.form.password.value == "")
 {
 alert('Enter Username and Password');
  return false;
 }
 if(document.form.username.value == "")
 {
 alert('Enter username');
  return false;
 }

 if(document.form.password.value == "")
 {
 alert('Enter password');
 return false;
 }
  return True;
}
</script>

<link  href="css/styles.css" type="text/css"  rel="stylesheet"/>

<div class="login-page">
  <div class="form">

    <form class="login-form" action="index.php" method="post" name="form">
      <input type="text" placeholder="username" name="username" id="username" required="required"/>
      <input type="password" placeholder="password" name="password" id="password" required="required"/>
      <?php
		   if(@$_POST['username']!="")
		   {
		   ?>
            <tr>
            <td colspan="2" align="center">
           <font color="#FF0000">Error In Login</font></td>
            </tr>
            <?php
		   }
		   ?>
     <input type="submit" name="login" value="LOGIN" 
     style="float:right;background:#4CAF50;color: #FFFFFF;font-size: 14px;" onclick="return(validate());" />
     </form>
  </div>
</div>