<?php

	$nome1 = "Luiz";
	$sobrenome = "Carlos";
	$nomeCompleto = $nome1 . " " . $sobrenome;


		echo $nomeCompleto;
		echo "<br/>";

		unset($nomeCompleto);

		if (isset($nomeCompleto)) {
			echo $nomeCompleto;
		}
?>