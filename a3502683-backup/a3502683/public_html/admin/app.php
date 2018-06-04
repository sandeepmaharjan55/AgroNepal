<?php

$conn=@mysql_connect("mysql6.000webhost.com", "a3502683_agronep", "sandeepmaharjan");
@mysql_select_db('a3502683_agrodb',$conn);
$username=$_GET['username'];



//echo $name;

 $query1="select * from login";
 $result1=@mysql_query($query1);
 

 
 while($row1=@mysql_fetch_array($result1))
 {
	 $users1=$row1['username'];
	 
 
 

	 if($username==$users1)
	 {
		 echo "Already Added<br>";
	 }
	 
	
	 
	 
	 
	 else
	 {
		 $query="select * from reg_tb where user='$username'";
$result=@mysql_query($query);
while($row=@mysql_fetch_array($result))
{
	
	$name=$row['user'];
	$email=$row['email_id'];
	$pass=$row['password'];
	
	 
}

		 $query2="insert into login(username,password,email) VALUES('$name','$pass','$email')";
		 $result2=@mysql_query($query2);
		 
		 if($result2)
		 {
			 echo " Sucessfully added<br>";
		 }
		 else
		 {
		 echo "Failed<br>";
		 }
	 

}


}

 
?>