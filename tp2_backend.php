<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <h1>Trabajo practico N°2 </h1>
  <br>
  <hr>
<h3>1) Crear variable y validar si es positivo</h3>  
  <?php
  $n1 = rand(-10,10);
if ( $n1 > 0) { echo 'la variable  '. $n1 . '  es positivo';}
   elseif ( $n1 == 0) {echo 'la variable $n1 es igual a 0 entonces no es ni positivo ni negativo';}
     else { echo 'la variable'. $n1  .'es negativa';}
?>
<br><hr>
<h3>2) Crear variable y validar que sea mayor a 1 y menor a 10</h3>
<?php
$n2 = rand(-10,20);
if ($n2 > 1 && $n2 <10  ) { echo 'la variable ' . $n2 .' es mayor a 1 y menor que 10'; }
  elseif($n1 === 1) {
    echo ' la variable es ' . $n2;
  }   
  elseif($n2 === 10) {
    echo 'la variable es '. $n2;
  }
  
  else {echo 'la variable N1 no ingresa en los parametros de medicion del punto a resolver';}
?>
<br><hr>
<h3>3) Crear una variable y validar que sea un numero mayor a 10 o menor a 2</h3>
<?php
$n3 = rand(-20,20);
if( $n3 > 10) {
  echo 'la variable es ' . $n3 . ' y es mayor a 10'
;}
  elseif ($n3 < 2 ) {
 echo  'la variable es '. $n3 . 'es menor que 2';
}
    else { echo 'la variable $n3 no entra en los parametros de medicion del punto a resolver'
;}
?>
  <br><hr>
<h3>4)</h3>
  <?php
$numero1 = rand(-10,10);
$numero2 = rand(10,-10);
$resta = $numero1 - $numero2;
$suma = $numero1 + $numero2;
$multi = $numero1 * $numero2;

if( $numero2 ==0 or $numero1==0 ) {  $div = null . $resto = null;
}
    elseif ($numero1 <> 0 or $numero2 <> 0) { $div = ($numero2 / $numero1) ; $resto = ($numero2 % $numero1);}
?><br>

<?php echo 'las variables son '. $numero1 . ' y ' . $numero2; ?> <br>

  <?php

if ($numero1 > $numero2) { 
  echo 'suma: ' . $suma ; ?> <br>  <?php 
  echo 'resta: ' . $resta ;
}
  elseif ($numero1 < $numero2 ) { 
    echo 'multiplicacion: '. $multi; ?> <br> <?php

    if ($div <> null) { echo 'Division: ' . $div; 
    
    }
    else{echo 'la division no se puede realizar porque su divisor o dividendo es 0';}?><br> <?php
    
    if($resto <> null){echo 'Resto: ' . $resto;}
    
    else{'no hay resto '; }
   ;}
  else { echo 'Los numeros ingresados son iguales';}
  
  ?> <br> <?php
 
?>
</body>
</html>