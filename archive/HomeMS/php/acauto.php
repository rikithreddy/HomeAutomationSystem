   <?php 
$str = file_get_contents('data.json');
$json = json_decode($str, true); 
$ownerstatus = $json['ownerlocation'];
$cartemp = $json['car']['cartemp'];
$cardist = $json['car']['distance'];
$carmove = $json['car']['movement'];
$outtemp = $json['house']['outtemp'];
$humidity = $json['house']['humidity'];
if($ownerstatus == 0 ){
	?><p>owner inside : aaaaaaaaaaa</p> <?php
}
else{
	if( $cardist <10 && $carmove==0){
	?><p>Temprature : </p> <?php echo $cartemp + ((($outtemp - $cartemp)/(($humidity/50) + 1))/1);
	}
	else{
		?><p>power saving mode</p> <?php
	}
}

?>



