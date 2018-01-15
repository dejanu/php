<?php


function filtrare_formular(){
	//empty array for results
	$rezultate = array();
	
	//isset is True always for $_REQUEST
	
if (empty($_REQUEST) || (empty($_REQUEST['search']) && empty($_REQUEST['price'])) ) {
	//$_REQUEST is empty atunci cand nu se da submit
	//$$_REQUEST['search'] si $_REQUEST['price'] sunt empty daca se da submit cu formularele goale
		return $rezultate;
	}
	
	//include array from data.php
	require_once('data.php');
	
	//verify the files that where submited by the user
	$price_string =  empty($_REQUEST['price']) ? false : $_REQUEST['price'];
	$search_string =  empty($_REQUEST['search']) ? false : $_REQUEST['search'];
	
	foreach ($data as $id => $produs){
		//filtrare
		$is_result = null;
		//user a scris ceva 
		if ($search_string !== false) {
			
				if (stripos($produs['nume'],$search_string) !== false) {
					$is_result = true;
					
				} else if (stripos($produs['culoare'],$search_string) !== false){
					$is_result = true;
				} else if (stripos($produs['provenienta'],$search_string) !== false){
					$is_result = true;
				}
			}
			else {
				$is_result = false;
			}
			
		if ($price_string !== false && $is_result !== false) 	{
			if ($produs['pret'] >= $price_string){
				
				$is_result = true;
			} else {
				$is_result = false;
			}
		}
			if ($is_result) {
				$rezultate[$id] = $produs;
								}
			
			}
			//END foreach
	return $rezultate;
}
?>