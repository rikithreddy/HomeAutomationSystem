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
$json = str_replace(str_split('\\/:*?"<>|'), ' ', $json);
$ownerstatus = $json['ownerlocation'];
$cardist = $json['car']['distance'];
$carmove = $json['car']['movement'];
$music = $json['car']['music'];
$expression = $json['car']['expression'];



	if(( $cardist <10 && $carmove==1) || ($cardist==0 && $carmove==0)){
		if($music==1){
		if($expression=="happy"){?> <b style="color:orange;">  SONG : </b> <?php echo "Stay – Zedd, Alessia Cara"; }
		else if($expression=="sad"){?> <b style="color:orange;"> SONG : </b> <?php echo "Shape of You by Ed Sheeran ";  } 
		else if($expression=="fear"){?> <b style="color:orange;"> SONG : </b> <?php echo "Something just Like this by Coldplay and The chainsmokers "; } 
		else if($expression=="angry"){?> <b style="color:orange;"> SONG : </b> <?php echo "Wild Thoughts by DJ Khaled"; } 
		else if($expression=="surprise"){ ?> <b style="color:orange;"> SONG : </b> <?php echo "Congratulations by Post Malone ";  } 
		else{	?> <b style="color:orange;">SONG : </b> <?php echo	"Despacito by Luis Fonsi"; }  		
		}
		else{
		?><b style="color:orange;">MUSIC PLAYER TURNED OFF !! </b> <?php
		}
	}
	else{
		echo file_exists('http://192.168.43.240:5002/data.json'); ?><b style="color:orange;">MUSIC PLAYER TURNED OFF !! </b> <?php
	}
