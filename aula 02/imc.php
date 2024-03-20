<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$peso = 81;
$altura = 1.82;

$imc = $peso/($altura * $altura);

 echo "Seu peso é de ", $peso, "Kg";
 echo "Sua altura é de ", $altura, "m";
 echo "Seu imc é de ", $imc;

 if ($imc < 18.5){
$classificação = "Magreza."
} 
 else if ($imc <= 24.9){
$classificação = "Normal"
}
 else if ($imc <= 29.9){
    $classificação = "Sobrepeso"
    }
 else if ($imc < 39.9){
    $classificação = "Obesidade"
} 
 else {
    $classificação = "Obesidade Grave"
}

 echo "Peso: $peso <br>";
 echo "Altura: $altura cm<br>";
 echo "Imc: $imc <br>";
 echo "Classificação: $classificação";
  ?>
</body>
</html>