<?php 

	$nome  = "Carlos";

	switch ($nome){

		case 'Joao':
				echo "<br> Nome dele e Joao";
			break;

		case 'Maria':
			echo "<br> Nome dela e Maria";
			break;

		case 'Jose':
			echo "<br> Nome dele e Jose";
			break;
		
		default:
			echo "Não nenhum deles";
			break;
	}

	/* Utilizando if */
	echo "<hr>";
	echo "<br>Utizando IF";
	if ($nome == 'Joao') {
		echo "<br> Nome dele e Joao";
	}else{
		if ($nome == 'Maria') {
			echo "<br> Nome dela e Maria";
		}else{
			if ($nome == 'Jose') {
				echo "<br> Nome dele e Jose";
			}else{
				echo "Não nenhum deles";
			}
		}
	}