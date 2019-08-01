<?php 

$suaIdade = 18;

$idadeCrianca = 12;
$idadeMaior = 18;
$idadeMelhor = 65;

if ($suaIdade < $idadeCrianca) {
	echo "Você é uma criança";
} 
elseif ($suaIdade < $idadeMaior) {
	echo "adolescente";
} 
elseif ($suaIdade < $idadeMelhor) {
	echo "Adulto";
}
else {

	echo "Idoso";
}

echo "<br>";


echo ($suaIdade < $idadeMaior)?"menor de idade":"maior de idade";


?>