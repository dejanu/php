<?php

//create unxi time
$unix_time = strtotime('01-01-2019');

setcookie('test',12343, $unix_time);
//verify is cookie exists
// if ( !isset($_COOKIE['test'])) {
	
	//create cookie by default the cookie is avalailable only during the active session
	// setcookie('test',12343, $unix_time);
// }
var_dump($_COOKIE['test']);
?>

<h3> Cookie is sent before </h3>
