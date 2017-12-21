<?php
$name = strip_tags($_POST['x']);
$surname = strip_tags($_POST['x']);
echo "Hello: ".$name."<hr>";
$final_grade = 0;
if (isset($name) && isset($surname)){
      if (isset($_POST["one"]) && $_POST["one"] == "1"){
    //echo "Correct : ".$_POST["test"];
      $final_grade+=1;
        }
      else { $final_grade = 0;}
      if(isset($_POST["two"]) && $_POST["two"] == "1") {
        $final_grade+=1;
      }
      else { $final_grade = 0;}
      if(isset($_POST["three"]) && $_POST["three"] == "1") {
        $final_grade+=1;
      }
      else { $final_grade = 0;}
  echo "Your grade is: ".$final_grade."<br>";
  echo "<a href = 'index.html'>BACK</a>";
}
 ?>
