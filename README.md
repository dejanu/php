# php
email: lucian.cornianu@bitacad.net
AJAX: nu face refresh intregii pagini html, ci face o adaptare a continutlui(o parte a paginii html) ex:search pe google
View ports : netstat -aon


#Recap
require_once = crapa daca nu gaseste dependinta
include_once = continua sa ruleze script-ul chiar daca nu gaseste dependita  
//include files
<?php include "time.inc"; ?> or <?php include (time.inc); ?>

//open file
fopen("time.txt","r");

//send emails directly from a script , needs a mail server app e.g posfix, cu ajutorul fucntiei
mail(destinatar,subject message, headers)

mailurile ajung in spam pentru ca in$header the from: nu e recunoscut

// superglobal variable holds information about headers, paths, and script locations
$_SERVER


#array
$array = array(1,2,3);
$array = [1,2,3];

COOKIE = are saved per domain
