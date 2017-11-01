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
$visitor = $json['house']['visitoris'];
$name = $json['house']['visitorface'];

$today = getdate();


if($visitor == 1 ){
	if($name == "Hari"){ ?> <div style="padding:15px;margin-left:60px;text-shadow: 2px 2px 8px #000000;"><b style="font-weight:bold;color:orange;">Welcome !! &nbsp;<?php
	echo $name?></b> master . Door is opened !! </div> <?php }
	else{
	?>
	<div style="padding:15px;float:left;margin-left:60px;text-shadow: 2px 2px 8px #000000;"><b style="font-weight:bold;color:orange;">Mr. &nbsp;<?php
	echo $name?></b> is waiting outside </div>  <div>
        <img alt="" src="css/dooropen.png" 
            style="height: 40px; width: 40px" id="imgClickAndChange2" onclick="changeImage2()" value="0" />
	</div>
	<?php 
	if(($today['seconds'] < 30 && $today['seconds'] > 24) || ($today['seconds'] < 59 && $today['seconds'] > 53)) 	
    { ?>
	
	<div style="width:5px;height:5px;opacity:0;float:left;">
	<audio controls="controls" autoplay style="background-color:tansparent;border:10px solid tansparent;">
	<!-- <source src="note.mp3" type="audio/mpeg"> -->
	</audio></div>
	<?php }
	}
}


?>
