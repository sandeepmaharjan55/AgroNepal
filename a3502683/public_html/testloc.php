<html>
<head>
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
</head>
<?php
include 'getLocation.php';

	?>
    <body>
<p><span class="label">Your Location:</span> <span id="location"></span></p>
</body>
	</html>