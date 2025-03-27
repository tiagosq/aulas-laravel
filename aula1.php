<?php
	ini_set('display_errors', '1');

	// Array e Objetos --> Objects
	$number = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
	$frutas = [
		'maca' => 'vermelha',
		'cocacola' => 'preta',
		'pera' => 'verde',
		'manga' => 'duas cores',
	];
	
	$total = 0;
	for($i = 0; $i < count($number); $i++) {
		$total = $total + $number[$i];
	}
	echo $total;

	try {
		foreach($frutas as $key => $value) {
			if($key === 'cocacola') {
				throw new Exception('Isso não é fruta!');
			}
			echo "<br />Fruta " . $key . " é " . $value;
		}
	} catch(Exception $error) {
		echo "OCORREU UM ERRO GRAVE NA APLICAÇÃO";
	}

	echo "FIM DO SCRIPT!";