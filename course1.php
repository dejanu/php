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