<?php
///os.getcwd()
$workDir = getcwd();
echo 'The script is running in: ' .$workDir;

echo "<br>";

//variable type
$var='Name';
echo gettype($var);
echo '<br>';

//arrays = collection of diffrent data types
$persons = array('alex','ionut',10,12.5);
//access the array values
//echo $persons[2];
echo '<br>';
echo '<pre>'.print_r($persons).'</pre>';
echo var_dump($persons);
echo '<br>';

//iterate thrugh array
foreach ($persons as $whatiwant){
    echo gettype($whatiwant),"\n";
}

 ?>
