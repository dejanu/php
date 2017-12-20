<?php
$name = strip_tags($_POST['x']);
$surname = strip_tags($_POST['x']);
echo "Hello: ".$name."<hr>";
if (isset($name) && isset($surname)){
      if ($_POST["test"] == "one"){
    echo "Correct : ".$_POST["test"];
        }
      else {
          echo "Incorrect ";
          die();
          }
}
 ?>
