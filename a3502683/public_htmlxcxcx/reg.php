<?php include('header.php'); ?>

<?php
	if(isset($_POST['submit'])){
$name=$_POST['user_name'];
$mail=$_POST['email'];
$sex=$_POST['sex'];
$pwd=$_POST['password'];
$insert="insert into reg_tb (user, email_id, password,sex)
values ('$name','$mail','$pwd','$sex')";
@mysql_query($insert);
	
}?>
      <div class="content">
        <div class="login">
        <link href="css/bacalhau-base-1467280140974.css" type="text/css" rel="stylesheet"/>
        	<div class="small-6 card pal">
                        <h1 class="text-center">
                    Create Account
                </h1>
                        	    <form action="reg.php" method="POST">
            <input type="hidden" value="f5ba4ff3559caabec0bbaeb90c0b7221d904a404" name="token">
            	        		    	<div> <span>
          <label>Gender</label>
          </span> <span>
            <select class="sex" name ="sex">
              <option value="Male">Male</option>
              <option value="Female">Female</option>
              <option value="Select"  selected="selected">Select</option>
            </select>
          </span> </div>
	
    	        				<div class="row row-border input-prefix">
		    <div class="small-2">
		        
		    </div>
		    <div class="small-10">
		        <input placeholder="User Name" id="user_name" name="user_name"type="text">
		    </div>
		</div>
	
						        <div class="row row-border input-prefix ">
            <div class="small-2">
                
            </div>
            <div class="small-10">
				                <input placeholder="Your E-mail" autocomplete="on" list="domains" name="email" id="email" type="email">
            </div>
        </div>
    
                                <div class="row row-border input-prefix ">
            <div class="small-2">
                
            </div>
            <div class="small-10 justify-between v-center pr">
                <input placeholder="Your Password" name="password" id="password" type="password">
                <input id="toggle-pass" class="hidden" type="checkbox">
                
            </div>
        </div>
            
                    <div class="df justify-between">
        	                
        	            	
                    </div>
                    	<input type="submit" name="submit">

    	        </form>
               
                                                    <div class="hr mtl ptl text-center s-bold">
        	                Already have an account?
                <a class="pls blue" href="index1.php">Login here</a>
                	</div>
   	</div>
        </div>
      </div>
           
    
                <div style="clear:both"></div>

<?php include('footer.php'); ?>