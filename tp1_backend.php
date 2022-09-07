<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
    <h1>Trabajo práctico N°1</h1>
    <h3>Patricio Diez</h3><hr>
<?php

    $saludo = "Hola mundo";
    echo $saludo;
    

?>
<br>
<hr>
<h3>Numeros enteros</h3>
<?php  
    

     $num1 = 10; 
     $num2 = 5;
  
    
     echo 'Entero: ' . $num1 .' Entero: '. $num2;
    

     ?>
     <br>
     <br>
<?php
    $suma = $num1 + $num2 ;
    $resta = $num1 - $num2;
    $mult = $num1 * $num2;
    $divi = $num1 / $num2;
    $resto = $num1 % $num2;
    
    
    
    echo 'Suma: '.$suma . 
    ' Resta: ' .$resta. 
    ' Multiplicacion: '.$mult .
    ' Division: ' .$divi .
    ' Resto: ' .$resto;
?>
 <br>
 <hr>
<h3>Cambio de grados de Celsius a Fahrenheit</h3>
 <h4>grados en 20°C</h4>
 <h5>formula de cambio:(°C x 9/5) + 32</h5>
 <?php
$faher =  20*1.8+32;

echo 'Resultado: '. $faher . ' °F';
?>

<br>   
<hr>
<h3>Implementar algoritomos que permitan:</h3>
<ul><li>Calcular el perímetro y el área de un rectangulo</li>

<h4>
    Base: 18cm <br> Altura: 12cm</h4>
    <h5>formula perímetro (base X 2) + (altura x 2)  </h5>
    <h5>formula área (base x altura)</h5>


<?php
$base = 18;
$altura = 12;

$perimetrorec = $base*2+$altura*2;
$arearec = $base * $altura;

echo 'el perímetro es '. $perimetrorec. 'cm';
?>
<br>
<?php
echo 'el área es '. $arearec. 'cm';

?>
<br>

<li>
    Calcular perímetro y área de un círculo 
</li>
<h4>Radio: 30cm</h4>
<h5>formula perímetro: 2 x π x r <br>
formula área: π x r² </h5>
</ul>
<?php
$radio = 30;
$perimetrocir= 2*M_1_PI*$radio;
$area = M_1_PI * pow( $radio, 2);

echo 'El perimetro del circulo es: ' . $perimetrocir;
?>
<br>
<?php
echo 'El area del circulo es: '. $area;

?>
</body>
</html>