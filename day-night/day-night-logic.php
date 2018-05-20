<?php
$time = date(G);

if($time <= 5) {
	$background_color = "rgba(0,0,25,1)";
	$background_image = "moon.png";
}
elseif($time >= 19) {
	$background_color = "rgba(0,0,25,1)";
	$background_image = "moon.png";
}
elseif($time >= 6) {
	$background_color = "rgba(0,120,255,.5)";
	$background_image = "clouds.png";
}
?>