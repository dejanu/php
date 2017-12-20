<?php
$names = array('Alex','Billy','Vitor');
//numeric array = list

//echo $names will generate error
//echo '<pre>',print_r ($names);

//associative array = dict
$person = array(
  'name'=>'alex',
  'age'=>24,
  'height'=> 5.9
);

print_r($person,true);

//foreach only used for associative Array
// foreach($person as $key => $value){
//   echo $value;
// }


//Calculate max value from an arrays
$numbers = array("one"=>1, "two"=>2, "three"=>33, "four"=>4);

function max_array($nums){
  $local_max = 0;
  foreach ($nums as $k=>$v){
    if ($v > $local_max){
      $local_max =  $v;
    }
  }
  return $local_max;

//bubble sort
  $x = array (83, 32, 51, 12, 8, 9, 1);

  function sorter ($arr){
      for ($i=0;$i<=count($arr)-1;$i++){
        for ($j=0;$j<=count($arr)-1;$j++){
            if ($arr[$i]>$arr[$j]) {
               $aux = $arr[$i];
               $arr[$i] = $arr[$j];
               $arr[$j] = $aux;
            }
        }
      }
      return $arr;
  }
}
 ?>
