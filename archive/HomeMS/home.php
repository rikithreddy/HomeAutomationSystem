<!DOCTYPE html>
<html>
<head>

  <meta charset="UTF-8">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="css/style.css">
 <link rel="stylesheet" href="style.css" type="text/css" media="screen" />
<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
</head>

<script type="text/javascript" src="jquery2.txt"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
   $('#acauto').load('acauto.php');   
}, 5000);

var auto_refresh = setInterval(
function ()
{
   $('#lauto').load('lauto.php');
}, 5000);

var auto_refresh = setInterval(
function ()
{
   $('#mauto').load('mauto.php');
}, 5000);

var auto_refresh = setInterval(
function ()
{
   $('#dauto').load('dauto.php');
}, 5000);


function disableF5(e) { if ((e.which || e.keyCode) == 116) e.preventDefault(); };
// To disable f5
    /* jQuery < 1.7 */
$(document).bind("keydown", disableF5);
/* OR jQuery >= 1.7 */
$(document).on("keydown", disableF5);

// To re-enable f5
    /* jQuery < 1.7 */
$(document).unbind("keydown", disableF5);
/* OR jQuery >= 1.7 */
$(document).off("keydown", disableF5);

</script>

<body style="background-image:url(css/back.jpg); background-repeat:repeat;" onload=load()>
<br>
<div style="margin-left:5%;margin-right:50px;width:90%;background-image:url(css/aaa.png);height:80px;background-color:transparent;text-align:center;padding:10px;">
<br>
<b style="font-weight:bold;color:orange;text-shadow: 3px 2px 0px  #000, -3px -2px 0px  #000, 3px -2px 0px  #000, -3px 2px 0px  #000;font-size:30px;"> HOME AUTOMATION SYSTEM</b>
</div>

<br>
<div id="dauto" style="margin-left:150px;margin-right:150px;clear:both;padding:0px;background-image: url(css/dautoback.jpg);background-color:rgba(0, 0, 0, 0.5);display:none;">	</div>
<br> 

<div class="box" style="clear:both;">
<div style="float:left;width:300px;color:darkorange;margin-left:50px;line-height:50px;font-size:35px;font-weight:bold; ">Air Conditioner  </div>
<div id="ac" style="float:left;width:300px;line-height:12px;margin-left:100px;">  
	
    <input class="hidden radio-label" type="radio" name="accontrol" id="no-button" value="0" onclick="acof()"/>
    <label class="button-label" for="no-button">
      <h1>Off</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="accontrol" id="yes-button"  value="1" onclick="acon()"/>
    <label class="button-label" for="yes-button">
      <h1>On</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="accontrol" id="maybe-button" value="2" onclick="aca()"/>
    <label class="button-label" for="maybe-button">
      <h1>Automatic</h1>
    </label>
	

</div>

<div id="temp" style="margin-left:50px;float:left;line-height:50px;display:none;">Temprature: 
<button onclick="dec()" style="border-radius:25px;"> - </button>
<input type="number" style="width:50px;text-align:center;-webkit-appearance:none;-moz-appearance:textfield;margin:0;" id="myNumber" value="24" min="16" max="30">
<button style="border-radius:25px;" onclick="inc()">+</button> </div>
  

<div id="acauto" style="clear:both;margin-left:35px;padding:15px;background-image: url(css/autoback.jpg);display:none;">
<div>
<script>
$('#acauto').load('acauto.php');
</script>

</div>
</div>

</div>



<br><br>
<div class="box">
<div style="float:left;width:300px;margin-left:50px;color:darkorange;line-height:50px;font-weight:bold;font-size:35px;">Lights  </div>
<div id="ac" style="float:left;width:300px;line-height:12px;margin-left:100px;">  

    <input class="hidden radio-label" type="radio" name="lcontrol" id="l1" onclick="lof()"/>
    <label class="button-label" for="l1">
      <h1>Off</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="lcontrol" id="l2" onclick="lon()" />
    <label class="button-label" for="l2">
      <h1>On</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="lcontrol" id="l3" onclick="loa()" />
    <label class="button-label" for="l3">
      <h1>Automatic</h1>
    </label>



</div>

<div id="col" style="margin-left:50px;float:left;line-height:50px;display:none;">Color: 
<select id="color" style="background-color:white;border:0px solid grey;width:100px;color:black;font-weight:bold;-moz-appearance: none;
    text-indent: 0.01px;
    text-overflow: '';">
  <option value="white" style="background-color:#777777;color:white;font-weight:bold;text-shadow: 5px 5px 5px black;">White</option>
  <option value="red" style="color:red;font-weight:bold;text-shadow: 5px 5px 5px black;">Red</option>
    <option value="orange" style="background-color:#777777;color:orange;font-weight:bold;text-shadow: 5px 5px 5px black;">Orange</option>
    <option value="green" style="color:green;font-weight:bold;text-shadow: 5px 5px 5px black;">Green</option>
  <option value="yellow" style="background-color:#777777;color:yellow;font-weight:bold;text-shadow: 5px 5px 5px black;">Yellow</option>
<option value="blue" style="color:blue;font-weight:bold;text-shadow: 5px 5px 5px black;">Blue</option></select>

  </div>  
 
<div id="lauto" style="clear:both;padding:15px;margin-left:35px;background-image: url(css/autoback.jpg);display:none;">
<script>
$('#lauto').load('lauto.php');
</script>
</div>
</div>


<br><br>
<div class="box">
<div style="float:left;width:300px;margin-left:50px;color:darkorange;line-height:50px;font-weight:bold;font-size:35px;">Music Player  </div>
<div id="music" style="float:left;width:300px;line-height:12px;margin-left:100px;">  

    <input class="hidden radio-label" type="radio" name="musiccontrol" id="m1" onclick="mof()"/>
    <label class="button-label" for="m1">
      <h1>Off</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="musiccontrol" id="m2" onclick="mon()" />
    <label class="button-label" for="m2">
      <h1>On</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="musiccontrol" id="m3" onclick="moa()" />
    <label class="button-label" for="m3">
      <h1>Automatic</h1>
    </label>

</div>

<div id="mus" style="clear:both;margin-left:35px;min-height:50px;background-image: url(css/autoback.jpg);display:none;">
<div id="mussong" style="float:left;padding:25px;line-height:0px;"> </div>
<div style="float:right;margin-right:110px;width:50px;height:50px;" >
<button style="font-size:24px;margin-top:5px;background-color:transparent;border:2px solid transparent;" onclick="randomsong()"><i class="fa fa-forward"></i></button>
</div>
<div style="float:right;margin-right:10px;width:50px;height:50px;">
<button style="font-size:24px;margin-top:5px;background-color:transparent;border:2px solid transparent;"><i class="fa fa-pause"></i></button></div>
<div style="float:right;margin-right:10px;width:50px;height:50px;">
<button style="font-size:24px;margin-top:5px;background-color:transparent;border:2px solid transparent;" onclick="randomsong()"><i class="fa fa-backward"></i></button></div>
<div style="float:right;margin-right:10px;margin-top:5px;width:50px;height:50px;"><img src="css/mute.png">
</div>






</div> 

<script>

var cars = ["SHAPE OF YOU-ED SHEERAN",
"DESPACITO (REMIX)-LUIS FONSI/DADDY YANKEE/BIEBER",
"CASTLE ON THE HILL-ED SHEERAN",
"GALWAY GIRL-ED SHEERAN",
"UNFORGETTABLE-FRENCH MONTANA FT SWAE LEE",
"SYMPHONY-CLEAN BANDIT FT ZARA LARSSON",
"HUMAN-RAGNBONE MAN",
"YOU DONT KNOW ME-JAX JONES FT RAYE",
"SOMETHING JUST LIKE THIS-CHAINSMOKERS & COLDPLAY",
"IM THE ONE-DJ KHALED/BIEBER/QUAVO/CHANCE",
"SOLO DANCE-MARTIN JENSEN",
"TOUCH-LITTLE MIX"];
 var x = Math.floor((Math.random() * 12) + 0);
document.getElementById("mussong").innerHTML = cars[x];

function randomsong(){
var songs22 = ["SHAPE OF YOU-ED SHEERAN",
"DESPACITO (REMIX)-LUIS FONSI/DADDY YANKEE/BIEBER",
"CASTLE ON THE HILL-ED SHEERAN",
"GALWAY GIRL-ED SHEERAN",
"UNFORGETTABLE-FRENCH MONTANA FT SWAE LEE",
"SYMPHONY-CLEAN BANDIT FT ZARA LARSSON",
"HUMAN-RAGNBONE MAN",
"YOU DONT KNOW ME-JAX JONES FT RAYE",
"SOMETHING JUST LIKE THIS-CHAINSMOKERS & COLDPLAY",
"IM THE ONE-DJ KHALED/BIEBER/QUAVO/CHANCE",
"SOLO DANCE-MARTIN JENSEN",
"TOUCH-LITTLE MIX"];
 var x = Math.floor((Math.random() * 12) + 0);
document.getElementById("mussong").innerHTML = songs22[x];
}
</script>

 
<div id="mauto" style="clear:both;padding:15px;margin-left:35px;background-image: url(css/autoback.jpg);display:none;"> <script>
$('#mauto').load('mauto.php');
</script>
</div>
</div>



<br><br>
<div class="box">
<div style="float:left;width:300px;margin-left:50px;color:darkorange;line-height:50px;font-weight:bold;font-size:35px;">Main Door  </div>
<div id="door" style="float:left;width:300px;line-height:12px;margin-left:100px;">  
	
    <input class="hidden radio-label" type="radio" name="dcontrol" id="d1" onclick="dof()"/>
    <label class="button-label" for="d1">
      <h1>Off</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="dcontrol" id="d2" onclick="don()" />
    <label class="button-label" for="d2">
      <h1>On</h1>
    </label>
    <input class="hidden radio-label" type="radio" name="dcontrol" id="d3" onclick="doa()" />
    <label class="button-label" for="d3">
      <h1>Automatic</h1>
    </label>

</div>

<div id="dor" style="margin-left:50px;float:left;line-height:50px;display:none;">

<div style="float:left;">
        <img alt="" src="css/dooropen.png" 
            style="height: 40px; width: 40px" id="imgClickAndChange" onclick="changeImage()" value="0" />
			<div id="doortext" style="float:right;">OPEN</div>
</div>

 </div>

</div>
<br><br><br><br><br><br><br><br><br><br><br><br>
<script>
function inc() {
    document.getElementById("myNumber").stepUp(1);
}
function dec() {
    document.getElementById("myNumber").stepDown(1);
}
 
    function changeImage() {

        if (document.getElementById("imgClickAndChange").val == "0") 
        {
            document.getElementById("imgClickAndChange").src = "css/dooropen.png";
			document.getElementById("imgClickAndChange").val = "1";
			document.getElementById("doortext").innerHTML = "OPEN";
        }
        else 
        {
            document.getElementById("imgClickAndChange").src = "css/doorclose.png";
			document.getElementById("imgClickAndChange").val = "0";
			document.getElementById("doortext").innerHTML = "CLOSE";
        }
    }

    function changeImage2() {

        if (document.getElementById("imgClickAndChange2").val == "0") 
        {
            document.getElementById("imgClickAndChange2").src = "css/dooropen.png";
			document.getElementById("imgClickAndChange2").val = "1";
        }
        else 
        {
            document.getElementById("imgClickAndChange2").src = "css/doorclose.png";
			document.getElementById("imgClickAndChange2").val = "0";
        }
    }

</script>
  
     
<script>


function acon() {
                var acv2 = document.getElementById("yes-button").checked;
				
				if(acv2==true)
				{ temp.style.display='block';;
    			acauto.style.display='none'; 
				<?php 
				$jsonStringon = file_get_contents('local.json');
				$dataon = json_decode($jsonStringon, true);
				$dataon['ac'] = 1;
				$newJsonStringon = json_encode($dataon);
				file_put_contents('local.json', $newJsonStringon); 
	
				?>
				}
				else
					temp.style.display='none';
				}

function acof() {
                var acv3 = document.getElementById("no-button").checked;
				
				if(acv3==true)
				{ temp.style.display='none'; 
			       acauto.style.display='none'; 
				   <?php
 				$jsonString = file_get_contents('local.json');
				$data = json_decode($jsonString, true);
				$data['ac'] = 0;
				$newJsonString = json_encode($data);
				file_put_contents('local.json', $newJsonString); 
					?>
                
				   }
				else
				{	temp.style.display='none';  }
				
				}

	
function aca() {
                var acv1 = document.getElementById("maybe-button").checked;
				
                if(acv1==true)
				{ acauto.style.display='block';
				temp.style.display='none'; 
				
				<?php 
	
 					$jsonString = file_get_contents('local.json');
				$data = json_decode($jsonString, true);
				$data['ac'] = 2;
				$newJsonString = json_encode($data);
				file_put_contents('local.json', $newJsonString); 
					?>
				
				}
				else
					acauto.style.display='block';
					}

					
function loa() {
                var lv1 = document.getElementById("l3").checked;
				
                if(lv1==true)
				{ lauto.style.display='block';
				col.style.display='none'; 
				
				<?php 		
				$jsonString = file_get_contents('local.json');
				$data = json_decode($jsonString, true);
				$data['light'] = 2;
				$newJsonString = json_encode($data);
				file_put_contents('local.json', $newJsonString); 
				?>
				
				}
				else
					lauto.style.display='block';
					}


function lof() {
                var lv3 = document.getElementById("l1").checked;
				
				if(lv3==true)
				{ col.style.display='none'; 
			       lauto.style.display='none'; 
				<?php
 				
				$jsonString = file_get_contents('local.json');
				$data = json_decode($jsonString, true);
				$data['light'] = 0;
				$newJsonString = json_encode($data);
				file_put_contents('local.json', $newJsonString); 
				
				?>
                
				   }
				else
				{	col.style.display='none';  }
				
				}

				function lon() {
                var lv2 = document.getElementById("l2").checked;
				
				if(lv2==true)
				{ col.style.display='block';;
    			lauto.style.display='none'; 
				<?php 	
				$jsonStringon = file_get_contents('local.json');
				$dataon = json_decode($jsonStringon, true);
				$dataon['light'] = 1;
				$newJsonStringon = json_encode($dataon);
				file_put_contents('local.json', $newJsonStringon); 
				?>
				}
				else
					col.style.display='none';

				}

function moa() {
                var mv1 = document.getElementById("m3").checked;
				
                if(mv1==true)
				{ mauto.style.display='block';
				mus.style.display='none'; 
				
				<?php 		
				$jsonString = file_get_contents('local.json');
				$data = json_decode($jsonString, true);
				$data['music'] = 2;
				$newJsonString = json_encode($data);
				file_put_contents('local.json', $newJsonString); 
				?>
				
				}
				else
					mauto.style.display='block';
					}


function mof() {
                var mv3 = document.getElementById("m1").checked;
				
				if(mv3==true)
				{ mus.style.display='none'; 
			       mauto.style.display='none'; 
				<?php
 				
				$jsonString = file_get_contents('local.json');
				$data = json_decode($jsonString, true);
				$data['music'] = 0;
				$newJsonString = json_encode($data);
				file_put_contents('local.json', $newJsonString); 
				
				?>
                
				   }
				else
				{	mus.style.display='none';  }
				
				}

function mon() {
                var mv2 = document.getElementById("m2").checked;
				
				if(mv2==true)
				{ mus.style.display='block';;
    			mauto.style.display='none'; 
				<?php 	
				$jsonStringon = file_get_contents('local.json');
				$dataon = json_decode($jsonStringon, true);
				$dataon['music'] = 1;
				$newJsonStringon = json_encode($dataon);
				file_put_contents('local.json', $newJsonStringon); 
				?>
				}
				else
					mus.style.display='none';
				}
				
function doa() {
                var dv1 = document.getElementById("d3").checked;
				
                if(dv1==true)
				{ dauto.style.display='block';
				dor.style.display='none'; 
				
				<?php 		
				$jsonString = file_get_contents('local.json');
				$data = json_decode($jsonString, true);
				$data['door'] = 2;
				$newJsonString = json_encode($data);
				file_put_contents('local.json', $newJsonString); 
				?>
				
				}
				else
					dauto.style.display='block';
					}

function don() {
                var dv2 = document.getElementById("d2").checked;
				
				if(dv2==true)
				{ dor.style.display='block';;
    			dauto.style.display='none'; 
				<?php 	
				$jsonStringon = file_get_contents('local.json');
				$dataon = json_decode($jsonStringon, true);
				$dataon['door'] = 1;
				$newJsonStringon = json_encode($dataon);
				file_put_contents('local.json', $newJsonStringon); 
				?>
				}
				else
					dor.style.display='none';
				}

function dof() {
                var dv3 = document.getElementById("d1").checked;
				
				if(dv3==true)
				{ dor.style.display='none'; 
			       dauto.style.display='none'; 
				<?php
 				
				$jsonString = file_get_contents('local.json');
				$data = json_decode($jsonString, true);
				$data['door'] = 0;
				$newJsonString = json_encode($data);
				file_put_contents('local.json', $newJsonString); 
				
				?>
                
				   }
				else
				{	dor.style.display='none';  }
				
				}

</script>

<script>
function load(){
<?php $str = file_get_contents('local.json');
$json = json_decode($str, true); 
 $acload = $json['ac'];
 $lload = $json['light'];
 $mload = $json['music'];
 $dload = $json['door'];
?>

if (<?php echo $acload ?> ==1 )
	{document.getElementById('yes-button').checked = true;
	temp.style.display = "block";
	acauto.style.display = "none";
}
else if( <?php echo $acload ?> ==0)
	{document.getElementById('no-button').checked = true;
	temp.style.display = "none";
	acauto.style.display = "none";}
else
	{	document.getElementById('maybe-button').checked = true;
		acauto.style.display = "block";
		temp.style.display = "none";
		}

if (<?php echo $lload ?> ==1 )
	{document.getElementById('l2').checked = true;
	col.style.display = "block";
	lauto.style.display = "none";
}
else if( <?php echo $lload ?> ==0)
	{document.getElementById('l1').checked = true;
	col.style.display = "none";
	lauto.style.display = "none";}
else
	{	document.getElementById('l3').checked = true;
		lauto.style.display = "block";
		col.style.display = "none";
		}

if (<?php echo $mload ?> == 1 )
	{document.getElementById('m2').checked = true;
	mus.style.display = "block";
	mauto.style.display = "none";
}
else if( <?php echo $mload ?> == 0)
	{document.getElementById('m1').checked = true;
	mus.style.display = "none";
	mauto.style.display = "none";}
else
	{	document.getElementById('m3').checked = true;
		mauto.style.display = "block";
		mus.style.display = "none";
		}
		

if (<?php echo $dload ?> == 1 )
	{document.getElementById('d2').checked = true;
	dor.style.display = "block";
	dauto.style.display = "none";
}
else if( <?php echo $dload ?> == 0)
	{document.getElementById('d1').checked = true;
	dor.style.display = "none";
	dauto.style.display = "none";}
else
	{	document.getElementById('d3').checked = true;
		dauto.style.display = "block";
		dor.style.display = "none";
		}
		

		
		}
</script>
</body>
</html> 
