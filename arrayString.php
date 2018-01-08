<?php
require_once("functions.php");



$produse = array(
			'pantofi' => 150,
			'pantaloni' => 200,
			'manusi' => 10,
			);
//global var			
$curs_valutar = array (
						'EUR' => 4.6,
						'USD' => 3.8,
						'GDP' => 5.22,
						);
				
				//iterate in curs|
			
//make a conversion in euro for each price

//$result = conversion($produse,'USD');

//echo ("<ol>".$result."</ol>");

///-----------------------------Strings

$nume='Alex';
$test = "My name is {$nume} and I can concatenate";

//mutable
//echo $test[1];
//echo strlen($test);
//$array_words = array_slice(explode(' ',$test), 0, 3);
var_dump(array_slice(explode(' ',$test), 0, 4));


//search intro strings -i case insensitive
$search = stripos($test, 'alex'); //returns the string UNTIL desired char
$search = stristr($test,'Alex'); //returns the string AFTER the desired char
//var_dump($search);

////verify if keyword exists in string
if (stripos($test,$nume) !== false) {
		echo "{$nume} exist in string";
}

//repalce in string
$string=str_ireplace($nume, 'IONUT' , $test);

//replace multiple wordss
$new_string = str_ireplace(
		array('Alex','YOO'),
		array('name','surname'),
		$test
		);
var_dump($new_string);

?>
