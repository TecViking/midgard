<?php

$frase = "A repetição é a mãe da retenção.";

$palavra = "mãe";

$q = strpos($frase, "mãe");

$texto = substr($frase, 0, $q);

var_dump($q);

echo "<br>";

var_dump($texto);

echo "<br>";

$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));

echo "$texto2";

echo "<br>";



?>