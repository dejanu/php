<?php
// script that add all numbers until a desired number
// $no=30;
// $summ=0;
// for ($i=1;$i<$no;$i++){
//     $summ+=$i;
// }
// echo gettype($summ);
// echo"<br>";
// echo "Suma este: ".$summ;
//---------------------------
// Sa se scrie un program care parcurge numerele întregi de la 0 la 50. Pentru multiplii de 3 să
//se afișeze “Fuzz”, iar pentru cei de 5 “Buzz”. Pentru numerele care sunt multiplu atât de 3 cât și
//de 5 să se afișeze “FuzzBuzz” %=mod (restul impartrii)
$no=50;
for ($i=1;$i<=$no;$i++){
  if ($i%3 == 0){
    if ($i%5 == 0){
      echo "FuzzBuzz";
    }
    else {
    echo "three ";
  }
  }
  elseif ($i%5 == 0) {
    echo "five ";
  }
  else { echo $i." ";}
}
 ?>
