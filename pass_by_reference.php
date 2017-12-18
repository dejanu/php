<?php

//pass by REFERENCE
function adder(&$x){
	
	$x+=3;
	return $x;
}
$numar = 10;
$inc = adder($numar);
echo ($inc);
echo "<br>";
echo ($numar);
