<?php
//array is an array containing information such as headers, paths, and script locations
var_dump ($_SERVER);

//summ to variable using globals(which allow us to take variables outside the scope )
//of variables
$x=0;
$y=10;

function add()
{
  $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();
echo $z;
 ?>
