<?php

//track user using session
//start anonymous session - the browser creates a cookie PHPSESSID
session_start();


//system var used to save the session
$_SESSION['test']=123;

var_dump($_SESSION);



?>
