<?php
//diff between ' and "
$unu= 'alex';
$doi = "alta";

echo "Niste ghilimeme ${doi}";
// 'Niste ghilimeme ${doi}'; generates error

//empty the memory location and delete the data type;
//$unu=NULL;
//var_dump($unu);

//deletes the variable from memory
//unset($unu);
//var_dump($unu);


//ENV variables ,
//array with info
var_dump($_SERVER);

//querry from url: localhostname/?x=1&y=2 defined by forms
var_dump($_REQUEST);
------------------------------------------------------------------------------------
$var1=10;
$var2=7;

$sum = $var1 + $var2;
$diff = $var2 - $var1;
$rest = $var1 % $var2;

$output=NULL;

//usage ${$value_of_another_var} and string concatenation
$output.= "Suma este: ${sum} <br/>";
$output.= "Modulo: $rest";

 
echo gettype($output);
echo '<br>';

// Conditional variable a.k.a it is not a function
$test = ($sum  < 20) ? 'TRUE :Suma este mai mica de 20' : 'False: suma nu e mai mica decat 20'; 
echo $test;
----------------------------------------------------------------------------------------
//cool concatenation
$output='';
for ($i=1;$i<11;$i++){
  $output .= ($i<10) ? $i.'-' : $i;
}
-------------------------------------------------------------------------------------
 //measure time
 $x =  microtime();

//breakpoint into a script
die(); 
exit();

//include php script from different files acts like a bassic copy/paste at the respective line
include('script.php');


//verify if $var is number  equivalent to variable.isalpha() from python
if(is_numeric($var) && is_numeric($var2));
-------------------------------------------------------------------------------------------
 //global scope
 //by default the functions do not see in global scope, in order to modify and access global vars use global $var_name keyword
 
 $z=10;
function summ ($x,$y){
 
   global $z;
   $suma = $x + $y + $z;
   return $suma;
}

//by reference modifica variabila pe care o promeste ca parametru
ksort( array &$array); //passed by reference in definition
ksort(&produse); //call the function by reference 
//by value trebuie assignata
$x = count($produse)
 -------------------------------------------------------------------------------------------
 //delete element from array
 unset($array_name["key"]);

//check if key is in array
isset($array_name['key_name'];
      
//look for value and then return the key name
 if (in_array('valoare 1',$test)){
	$cheie = array_search('valoare_1',$test);
		echo "key for value 1 is : ".$cheie;
	}	

      
//explode equivalent to .split() -> converts a string to array + reading from csv
 $continut_fisier = file_get_contents('test.csv');
//var_dump($continut_fisier);

$row_array = explode("\n", $continut_fisier);
//var_dump($row_array);

$words = explode ("|",$continut_fisier);
//var_dump($words);
      
      
  
      
