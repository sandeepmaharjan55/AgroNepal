<?php include('header.php'); ?>
      <div class="content">
      <div class="login">
      <link href="css/bacalhau-base-1467280140974.css" type="text/css" rel="stylesheet"/>
  		<div class="small-6 card pal">
                    <h1 class="text-center">
                Login
            </h1>
                    	    <form action="login.php" method="post">
            <input type="hidden" value="f5ba4ff3559caabec0bbaeb90c0b7221d904a404" name="token">
            	        		
    	        		
						        <div class="row row-border input-prefix ">
            <div class="small-2">
               
            </div>
            <div class="small-10">
				                <input placeholder="Your E-mail" autocomplete="on" list="domains" required name="LoginForm[email]" id="LoginForm_email" type="email">
            </div>
        </div>
    
                                <div class="row row-border input-prefix ">
            <div class="small-2">
                
            </div>
            <div class="small-10 justify-between v-center pr">
                <input placeholder="Your Password" required name="LoginForm[password]" id="LoginForm_password" type="password">
                <input id="toggle-pass" class="hidden" type="checkbox">
                
            </div>
        </div>
    
                    	
                        
                    <div class="df justify-between">
        	                        <input id="ytLoginForm_rememberme" type="hidden" value="0" name="LoginForm[rememberme]">
        <label for="LoginForm_rememberme">Remember Me</label>
    
        	            			<a href="#" class="block text-right">
	    	Forgot password?
		</a>
	
                    </div>
                    	<button type="submit" class="button full-width mtl">Login</button>

    	        </form>
               
           <div class="hr mtl ptl text-center s-bold">
        		        	Don't have an account?
	        	<a class="pls blue" href="reg.php">Create new account</a>
        	    	</div>
   	</div>
    </div>
      </div>
           
    
                <div style="clear:both"></div>

<?php include('footer.php'); ?>