<?php
	require_once('auth.php');
?>
<?php include('header1.php');
$select="SELECT * FROM post_tb order by post_id desc";
$sql=@mysql_query($select);
?><head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
<link href="style1.css" rel="stylesheet" type="text/css" /></head>

    
<div class="content">
      
      <?php include('demo.php'); ?> 
      
      <div class="rss">
      <a href="http://www.accuweather.com/en/np/kathmandu/241809/weather-forecast/241809" class="aw-widget-legal">
<!--
By accessing and/or using this code snippet, you agree to AccuWeather’s terms and conditions (in English) which can be found at http://www.accuweather.com/en/free-weather-widgets/terms and AccuWeather’s Privacy Statement (in English) which can be found at http://www.accuweather.com/en/privacy.
-->
</a><div id="awcc1471578216977" class="aw-widget-current"  data-locationkey="" data-unit="c" data-language="en-us" data-useip="true" data-uid="awcc1471578216977" data-targeturl="http://localhost/proj1/weather.php"></div><script type="text/javascript" src="http://oap.accuweather.com/launch.js"></script>
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
      <?php
	  $i=0;
while($rows=@mysql_fetch_array($sql)){
	$i++;
	if($i<=5){
?>
      	<div class="box">
        	<div class="box_img">
            
            	<img src="uploads/<?php echo $rows['img']?>"  height="100px" width="100px"alt="" border="0" />
            </div>
            <div class="info">
            	<h3><?php echo $rows['post_header'];?></h3>
                
            </div>
        </div>
     <?php }else{break;} }?>   
        
  </div>
    
    
                <div style="clear:both"></div>
                

<?php include('footer.php'); ?>



















