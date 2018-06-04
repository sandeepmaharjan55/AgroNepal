 <?php 
 $conn=@mysql_connect("localhost", "root", "");
@mysql_select_db('agro_db',$conn);
?>

 <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><head>


    <title>AgroNepal</title>
    <link rel="icon" href="pic/leaf_logo.png"/>
	<link  href="css/style.css" type="text/css"  rel="stylesheet"/>
    <link href="navcss.css" rel="stylesheet" type="text/css" />
	</head>
  
<body id="bd">

	<div class="header">
    <marquee bgcolor="#66890c" behavior="alternate"><font color="#FFFFFF"><?php echo "NOTE:- WITHOUT LOGIN YOU CANNOT PERFORM ANY OPERATIONS SO PLEASE SIGNUP FIRST"; ?></font>
           </marquee> <div class="header_top">
                  <div class="wrapper">
                           <div class="top_nav">
                              <ul>
                                <li>
                                  <a href="faq.php">FAQ&nbsp;</a>
                                </li>
                                <li>
                                  <a href="#">&nbsp;Help Desk&nbsp;</a>
                                </li>
                                <li>
                                  <a href="#">&nbsp;Support&nbsp;</a>
                                </li>
                                 
                                 
                                <li>
                                
<a href="index1.php">&nbsp;Login<img src="pic/user.png" height="18px;" /></a>
<a href="reg.php">&nbsp;Signup<img src="pic/user.png" height="18px;" /></a>



                                  
                                </li>
                              
                              </ul>
                           </div>
                           <div class="header-mid">
                              <input type="text" name="s" placeholder="Search here.." size="16" class="search">
                           </div>
                             <div class="social_site">
                                <ul>
                                      <li>
                                        <div class="circle"><a href="https://www.facebook.com/sandeep.mhrzn"><img src="pic/fb.png" /></a></div>
                                      </li>
                                      <li>
                                        <div class="circle"><a href="https://plus.google.com/u/0/108091501871668709736"><img src="pic/google.png" /></a></div>
                                      </li>
                                      <li>
                                        <div class="circle"><a href="#"><img src="pic/in.png" /></a></div>
                                      </li>
                                      <li>
                                        <div class="circle"><a href="https://twitter.com/sandeepmah8"><img src="pic/twitter.png"  /></a></div>
                                      </li>
                                  
                                </ul>
                            </div>
                  </div>
            </div>
            <div class="wrapper">
            	<div class="logo">
                	<img src="pic/leaf_logo.png"/>
                </div>
                
                <div class="nav">
                    <ul>
    					<li ><a href="home.php">Home</a></li>
    					
                        <li><a href="majorcrops.php">Search Major Crops</a></li>
                  
                                  <li><a href="shop.php">Market</a></li>
                       
                        <li><a href="chat.php">Ask online</a></li>
                       <li><a href="about_us.php">About Us</a></li>
    					
                       	<li><a href="contact_us.php">Contact Us</a></li>
                        
 					 </ul>
             </div>
            </div>	
        </div>

        
       
        
        
       