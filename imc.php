<?php

$altura = 1.80;
$peso = 130.00;
$alturaIMC = $altura * $altura;
$pesoIMC = $peso / $alturaIMC;

if($pesoIMC < 18.5){
    echo "Peso abaixo do ideal";
}

else if($pesoIMC < 24.9){
    echo "Peso ideal";
}

else if($pesoIMC < 29.9){
    echo "Sobrepeso";
}

else if($pesoIMC < 34.9){
    echo "Obesidade grau 1º";
}

else if($pesoIMC < 39.9){
    echo "Obesidade grau 2°";
}

else{
    echo "Obesidade de grau 3°";
}