<?php

#Questão 01

$numerosMegaSena = [];

while(count($numerosMegaSena) < 6){
    $numero = rand(1,60);
    if (!in_array($numero, $numerosMegaSena)) {
        array_push($numerosMegaSena, $numero);
    } 
}

echo "<pre>";
echo "#Questão 01 <br><br>";
echo "Confira números para jogar na Mega-Sena: <br><br>";
asort($numerosMegaSena, $flags = SORT_NUMERIC);
echo implode(" - ", $numerosMegaSena);
echo "<br><br>";
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-";
echo "<br><br>";
echo "</pre>";


#Questão 02

$listaNumeros = [33, 82, 1, 15, 44];
$numeroMaior = 0;
$numeroMenor = 0;

for ($i=0; $i < count($listaNumeros) - 1 ; $i++) {
    if ($i == 0) {
        $numeroMaior = $listaNumeros[$i];
        $numeroMenor = $listaNumeros[$i];
    } else {
        if ($listaNumeros[$i] > $numeroMaior) {
            $numeroMaior= $listaNumeros[$i];
        }
        if ($listaNumeros[$i] < $numeroMenor) {
            $numeroMenor= $listaNumeros[$i];
        }   
    }
}

echo "<pre>";
echo "#Questão 02 <br><br>";
print_r($listaNumeros);
echo "<br><br>";
echo "Maior número no array: " . $numeroMaior;
echo "<br>";
echo "Menor número no array: " . $numeroMenor;
echo "<br><br>";
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-";
echo "<br><br>";
echo "</pre>";


#Questão 3

echo "<pre>";
echo "#Questão 03 <br><br>";

$listaNumeros = [5, 3, 8, 6, 7, 2, 1, 12, 4, 9];
echo "Lista não ordenada: <br>";
print_r($listaNumeros);

for ($i = 0; $i < count($listaNumeros) - 1; $i++) {
    for ($j = 0; $j < count($listaNumeros) - 1; $j++) {
		if($listaNumeros[$j] > $listaNumeros[$j+1]) {
		
			$temp = $listaNumeros[$j];
			$listaNumeros[$j] = $listaNumeros[$j+1];
			$listaNumeros[$j+1] = $temp;
		}
	
	}
}
echo "<br>";
echo "Lista ordenada: <br>";
print_r($listaNumeros);

echo "<br>";
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-";
echo "<br><br>";
echo "</pre>";


#Questão 4

$palavra = "martinica";
$palavraInverso = strrev($palavra);

echo "<pre>";
echo "#Questão 04 <br><br>";
 if ($palavra == $palavraInverso) {
    echo $palavra . " é um palíndromo. O inverso dela é: " . $palavraInverso;
 } else {
    echo $palavra . " não é um palíndromo. O inverso dela é: " . $palavraInverso;
 }
echo "<br><br>";
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-";
echo "<br><br>";
echo "</pre>";


#Questão 5

$lado1 = 10; 
$lado2 = 20; 
$lado3 = 30;

echo "<pre>";
echo "#Questão 05 <br><br>";
if ($lado1 == $lado2 && $lado2 == $lado3) {
    echo "Esse é um triângulo equilátero. Porque todos os lados tem o mesmo tamanho: " . $lado1;
} elseif ($lado1 != $lado2 && $lado2 != $lado3 && $lado1 != $lado3) {
    echo "Esse é um triângulo escaleno. Porque todos os lados tem tamanhos diferentes: " . $lado1 . ", ". $lado2 . ", " . $lado3 . ".";
} elseif ($lado1 == $lado2 || $lado2 == $lado3 || $lado1 == $lado3) {
    echo "Esse é um triângulo isóceles. Porque dois lados são iguais: " . $lado1 . ", ". $lado2 . ", " . $lado3 . ".";
}

echo "<br><br>";
echo "-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-=-";
echo "<br><br>";
echo "</pre>";

?>