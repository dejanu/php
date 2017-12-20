<?php
$name = strip_tags($_POST['x']);
$surname = strip_tags($_POST['x']);

echo "Hello: ".$name."<hr>";

if (isset($name) && isset($surname)){

      if (isset($_POST["unu"])){
    echo "Correct : ".$_POST["unu"];
        }
      else {
          echo "Incorrect ";
          die();
          }
}



 ?>
