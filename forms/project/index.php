<?php
require_once('functions.php')

?>

<form id="filtru" method="get">
	
	Search <br>
	<input type="text" name="search" value="" />
	<br><br>
	
	Pret >=<br>
	<input type="text" name="price" value="" />	

	<br> <br>
	<input type="submit" value="search" />
	
	<a href="/">Resetare</a>

</form>

<?php
$rezultate =  filtrare_formular();

if (!empty($rezultate)) { ?>

 <hr>
  Numar rezultate :<?php echo count($rezultate); ?>
  <hr>
  
  <?php foreach ($rezultate as $rezultat) { ?>
  
  Nume produs: :<?php echo $rezultat['nume']; ?>
  <br>
  Nume culoare: :<?php echo $rezultat['culoare']; ?>
  <br>
  Nume provenienta: :<?php echo $rezultat['provenienta']; ?>
  <br>
	
	
			<?php	} ?>
	
<?php	} ?>