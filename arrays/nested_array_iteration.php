<?php
//associative Array

$modules = array("os" => array("path" => 1,
                              "chdir" => 2,
                              "listdir" => 3),
                "sys" => array( "exit"=> 5,
                               "platform"=> 6,
                               "version" => 7),
                "random"=>"randrange",
                  );

//var_dump($modules);
//echo('<hr />');

//array iteration
// foreach ($modules as $k =>$v) {
//       //array to string notice due to the fact that we have nested arrays
//       foreach ($v as $key => $value) {
//         echo $k." : ".$key." : ".$value."<br>";
//       }
// }

//read from csv
$file_content = file_get_contents('answers.csv');
$row_array = explode("\r\n",$file_content);
var_dump($row_array);

 ?>
