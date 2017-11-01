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

$ownerstatus = $json['ownerlocation'];
$cartemp = $json['car']['cartemp'];
$cardist = $json['car']['distance'];
$carmove = $json['car']['movement'];
$outtemp = $json['house']['outtemp'];
$humidity = $json['house']['humidity'];
	if(($cardist <10 && $carmove==1) || ($cardist == 0 && $carmove==0)){
	if($cartemp != 0  ){
	?><b style="color:orange;">AC TEMPRATURE : &nbsp; </b> <?php 
	if( $cartemp < 16 || $cartemp > 35 ) {
	echo "24"	;
	}
	else{
	echo (int)($cartemp + (((($outtemp - $cartemp)/(($humidity/50) + 1)))/3)); 
	}
	?> &#8451 <br><br>
	<b>OUTSIDE TEMPRATURE : &nbsp; </b> <?php echo $outtemp; ?> &#8451 <br>
	<b>HUMIDITY : &nbsp; </b> <?php echo $humidity; ?> % <?php
	}
	else{
		?><b style="color:orange;">AC TURNED OFF !! </b><?php
	}
	}
	else{
		?><b style="color:orange;">AC TURNED OFF !! </b><?php
	}
	

?>



