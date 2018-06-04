<html>
 
<head>







        
<link href="navcss.css" rel="stylesheet" type="text/css" />


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
<script>
$(document).ready(function(){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocation);
    } else { 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position) {
	var latitude = position.coords.latitude;
	var longitude = position.coords.longitude;
	$.ajax({
		type:'POST',
		url:'getLocation.php',
		data:'latitude='+latitude+'&longitude='+longitude,
		success:function(msg){
            if(msg){
               $("#location").html(msg);
            }else{
                $("#location").html('Not Available');
            }
		}
	});
}
</script>
<style type="text/css">
	p{ border: 2px dashed #009755; width: auto; padding: 10px; font-size: 18px; border-radius: 5px; color: #FF7361;}
    span.label{ font-weight: bold; color: #000;}
</style>




<style>
.dropbtn {
    background-color: #D0F0C0;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
    cursor: pointer;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>












</head>
















<?php include('header.php'); ?>






            
     
 
            
            
            
       
            
            
            
<?php include('getLocation.php'); ?>
      <div class="content">
       <?php include('demo.php'); ?> 
       
      	<div class="box">
        	<div class="box_img">
            	<img src="pic/crops.jpg" />
            </div>
            <div class="info">
            	<h3>Nearby</h3>
               
















<body>























 <p><span class="label">Your Location:</span> <span id="location"></span></p>
 
   
    
    <div class="dropdown">
  <button class="dropbtn">Read More</button>
  <div class="dropdown-content">
   
   <ul id="menu">

	<li>Major Crops</a>
		<ul>
			<li><a href="#">Wheat</a>
				<ul>
					<li><a href="wheat_gen.php">General Info</a></li>
					<li><a href="wheat_seed.php">Seed Varieties</a></li>
					
				</ul>
			</li>
			<li><a href="#" title="Maize">Maize</a>
				<ul>
					<li><a href="wheat_gen.php">General Info</a></li>
					<li><a href="wheat_seed.php">Seed Varieties</a></li>
				</ul>
			</li>
            <li><a href="#" title="Maize">Rice</a>
				<ul>
					<li><a href="wheat_gen.php">General Info</a></li>
					<li><a href="wheat_seed.php">Seed Varieties</a></li>
				</ul>
			</li>
            <li><a href="#" title="Maize">Pulses</a>
				<ul>
					<li><a href="wheat_gen.php">General Info</a></li>
					<li><a href="wheat_seed.php">Seed Varieties</a></li>
				</ul>
			</li>
           
		</ul>
	</li>
</ul>
    
  </div>
</div>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    

               
                
            </div>
        </div>
        <div class="box">
            <div class="box_img">
                    <img src="pic/wheat.jpg" />
                </div>
                <div class="info">
            	<center><h3>Wheat</h3></center>
                
Wheat is the main cereal crop in Nepal. The total area under the crop is about 29.8 million hectares in the...
<a href="wheat_gen.php"><font color="#00CC00">Read More>></font></a>
                
            </div>
            </div>
            
            
        <div class="box">
                    <div class="box_img">
                    <img src="pic/paddy.jpg" />
                </div>
                <div class="info"><center>
            	<h3>Paddy</h3></center>
Oryza Sativa, it is believed, is associated with wet, humid climate, though it is not a tropical plant. It is...<a href="paddy.php"><font color="#00CC00">Read More>></font></a>
                
            </div>
            </div>

        <div class="box">
            <div class="box_img">
                    <img src="pic/images.png" />
                </div>
                <div class="info">
            	<h3>Sandeep Maharjan</h3>
                
            </div>
            </div>
    
        <div class="box">
            <div class="box_img">
                    <img src="pic/images.png" />
                </div>
                <div class="info">
            	<h3>Sandeep Maharjan</h3>
                
            </div>
            <div class="boxesharu">
<a href="http://www.accuweather.com/en/np/kathmandu/241809/weather-forecast/241809" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1471578216977" class="aw-widget-current"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1471578216977" data-targeturl="http://localhost/proj1/weather.php"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
</div></div>
<div class="rss">




    <!-- start sw-rss-feed code --> 
<script type="text/javascript"> 
<!-- 
rssfeed_url = new Array(); 
rssfeed_url[0]="http://agriculture.einnews.com/rss/egYHw3OFHDLW_Hti";  
rssfeed_frame_width="180"; 
rssfeed_frame_height="250"; 
rssfeed_scroll="on"; 
rssfeed_scroll_step="6"; 
rssfeed_scroll_bar="off"; 
rssfeed_target="_blank"; 
rssfeed_font_size="12"; 
rssfeed_font_face=""; 
rssfeed_border="on"; 
rssfeed_css_url=""; 
rssfeed_title="on"; 
rssfeed_title_name=""; 
rssfeed_title_bgcolor="#D0F0C0"; 
rssfeed_title_color="#99cc00"; 
rssfeed_title_bgimage="http://"; 
rssfeed_footer="off"; 
rssfeed_footer_name="rss feed"; 
rssfeed_footer_bgcolor="#fff"; 
rssfeed_footer_color="#333"; 
rssfeed_footer_bgimage="http://"; 
rssfeed_item_title_length="50"; 
rssfeed_item_title_color="#666"; 
rssfeed_item_bgcolor="#fff"; 
rssfeed_item_bgimage="http://"; 
rssfeed_item_border_bottom="on"; 
rssfeed_item_source_icon="off"; 
rssfeed_item_date="off"; 
rssfeed_item_description="on"; 
rssfeed_item_description_length="120"; 
rssfeed_item_description_color="#666"; 
rssfeed_item_description_link_color="#333"; 
rssfeed_item_description_tag="off"; 
rssfeed_no_items="0"; 
rssfeed_cache = "302c56304e947ff2010d96bbea2e6f5b"; 
//--> 
</script> 
<script type="text/javascript" src="http://feed.surfing-waves.com/js/rss-feed.js"></script> 

</div> 
            </div>
            
        </div>
     
           
    
                <div style="clear:both"></div>
                








</body>




<?php include('footer.php'); ?>
</html>
