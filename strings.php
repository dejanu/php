<?php
//escaping strings
$var='Tommorow I\'ll learn PHP global vars';
echo $var;

$varr='This is a bad command : del c:\*.*';
echo (addslashes($varr));

//concatenate strings diff . and , operators
$word ='around';
echo 'What comes '.$word.' comes ' .$word;

//this word only with double quouted
echo "What come {$word} comes {$word}";
?>