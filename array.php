<?php
$nume =  array('Mere','Pere','Mere');

$produse = array(
		'Mere' => 23,
		'Pere' => 3,
		'Mere' => 11.
	);
	
$mat = array(
		'Caise' => array(
					'origine' => 'italia',
					'calitate' => 3,
					),
		'Pere' => array(
					'origine' => 'Spania',
					'calitate' => 2,
					),
		'Mere' => array(
					'origine' => 'Romania',
					'calitate' => 1,
					),
	);	
//var_dump($produse);
//var_dump($mat);

$output = '';
$output .= "<b>Mere</b> <br />";
$output .= "<b>Origine: </b>".$mat['Mere']['origine']."<br />";

foreach ($mat as $key => $value){
	echo $key."<br>";
	foreach ($value as $k => $v){
					echo $k." ".$v."<br>";
					}
	echo "<hr />";
			}

//echo $output;


?>
