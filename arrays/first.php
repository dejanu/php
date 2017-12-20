<?php
$names = array('Alex','Billy','Vitor');
//numeric array = list

//echo $names will generate error
echo '<pre>',print_r ($names);

//associative array = dict
$person = array(
  'name'=>'alex',
  'age'=>24,
  'height'=> 5.9
);

print_r($person,true);

 ?>
