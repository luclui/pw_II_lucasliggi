<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    IMC
    </title>
    <style>
        *{
            font-size:20pt;
        }
    </style>
</head>
<body>


<?php
$peso = 90;
$altura = 1.97;
$imc = $peso/($altura*$altura);
$imc = number_format($imc, 2, ',', '.');

echo ("Seu peso é: "), $peso, ("kg"), "<br>";
echo ("Sua atura é: "), $altura,("m"), "<br>";
echo ("Seu IMC é: "), $imc, "<br>";

if ($imc <= 18.5){
    echo "Você está abaixo do peso ideal";
}elseif ($imc< 25) {
    echo "Você está no peso ideal";
}elseif ($imc <= 30 ){
    echo "Você está com sobrepeso";
}elseif ($imc <= 40){
    echo "Você está obeso. Procure um especialista";
}else {
    echo "Você está com obesidade grave. Procure um médico urgente";
}
//imc peso/(altura.altura)
?>
    
</body>
</html>