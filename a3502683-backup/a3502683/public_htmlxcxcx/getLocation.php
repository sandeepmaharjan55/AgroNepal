
<?php

$conn=@mysql_connect("localhost", "root", "");

@mysql_select_db('agro_db',$conn);?>
<?php
$conn=@mysql_connect("localhost", "root", "");
@mysql_select_db('loc_db',$conn);

if(!empty($_POST['latitude']) && !empty($_POST['longitude'])){
    //Send request and receive json data by latitude and longitude
    $url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng='.trim($_POST['latitude']).','.trim($_POST['longitude']).'&sensor=false';
    $json = @file_get_contents($url);
    $data = json_decode($json);
    $status = $data->status;
    if($status=="OK"){
        //Get address from json data
        $location = $data->results[0]->formatted_address;
    }else{
        $location =  '';
    }
    //Print address 
    echo $location;
$insert="insert into loc_tb (location)
values ('$location')";
@mysql_query($insert);

	
	$sql = "SELECT crops FROM data_loc where location='$location'";
	//$sql = @mysql_query("SELECT id, location FROM data_loc WHERE location='$location'");
   @mysql_select_db('agro_db');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not get data: ' . mysql_error());
   }
   
   while($row = mysql_fetch_array($retval, MYSQL_ASSOC)) {
      echo "<br>Nearby Major Crops : {$row['crops']} <br>";
   }
}
?>
