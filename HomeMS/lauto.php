<?php 
error_reporting(E_ERROR | E_PARSE );
ini_set('default_socket_timeout',2);
try{
$str = file_get_contents('http://192.168.43.240:5002/data.json'); 
if($str==FALSE){$str = file_get_contents('data.json'); 
	$json = json_decode($str, true); }

$json = json_decode($str, true); 
}
catch(Exception $e)
{
	$str = file_get_contents('data.json'); 
	$json = json_decode($str, true); 
}


$json = json_decode($str, true); 
$ownerstatus = $json['ownerlocation'];
$cardist = $json['car']['distance'];
$carmove = $json['car']['movement'];
$expression = $json['car']['expression'];

$today = getdate();

if ($ownerstatus == 1 ){
if(  $today['hours'] > 1 || $today['hours'] < 4 ) {			//indian time is 3 hours ahead.
		if($expression=="happy"){ ?> <b style="color:orange;">LIGHTS TURNED ON !! </b> <br> <b>COLOUR : &nbsp;</b><b style="color:orange;font-weight:bold;text-shadow: 15px 15px 15px #000000;">Orange</b> <?php }
		else if($expression=="sad"){ ?><b style="color:orange;">LIGHTS TURNED ON !! </b> <br> <b>COLOUR : &nbsp;</b> <b style="color:blue;font-weight:bold;text-shadow: 15px 15px 15px #000000;">Blue</b><?php } 
		else if($expression=="fear"){ ?> <b style="color:orange;">LIGHTS TURNED ON !! </b> <br><b>COLOUR : &nbsp;</b> <b style="color:lime;font-weight:bold;text-shadow: 15px 15px 15px #000000;">Green</b><?php } 
		else if($expression=="angry"){ ?> <b style="color:orange;">LIGHTS TURNED ON !! </b> <br><b>COLOUR : &nbsp;</b> <b style="color:yellow;font-weight:bold;text-shadow: 15px 15px 15px #000000;">Yellow</b><?php } 
		else if($expression=="surprise"){?> <b style="color:orange;">LIGHTS TURNED ON !! </b> <br> <b>COLOUR : &nbsp;</b><b style="color:red;font-weight:bold;text-shadow: 15px 15px 15px #000000;">Red</b><?php  } 
		else{		?> <b style="color:orange;">LIGHTS TURNED ON !! </b> <br> <b>COLOUR : &nbsp;</b><b style="color:white;font-weight:bold;text-shadow: 15px 15px 15px #000000;">White</b><?php }  	
	}
	else{
		?><b style="color:orange;">LIGHTS TURNED OFF !! </b> <?php
	}

}

else{
?> <b style="color:orange;">LIGHTS TURNED OFF !! </b> <?php
}

?>
