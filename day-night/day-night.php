<!DOCTYPE html>
<html>
<head>
	<?php require_once('day-night-logic.php');?>
	<meta http-equiv="refresh" content="60"/>
	<style type='text/css'>
       	body {
           	background-color: <?=$background_color?>;
           	background-image: url(<?=$background_image?>);
           	background-repeat: no-repeat;
           	background-position: top right;
           	font-family: Helvetica, sans-serif;
           	color: white;
           	font-size: xx-large;
        }      
  	</style>
</head>

<body>
	It is <?=date("g:i a")?> on <?=date("l, F j, Y")?>
</body>
</html>