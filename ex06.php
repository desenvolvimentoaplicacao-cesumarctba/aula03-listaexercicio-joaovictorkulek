<?php
echo 'Calculo de IMC'.PHP_EOL;
$peso = readline('Informe o peso: '.PHP_EOL);
$altura = readline('Informe a altura: '.PHP_EOL);
$imc = $peso/($altura ^ 2);
  if ($imc <= 18.5) {
    echo 'Abaixo do peso!';
  } 
  if (($imc >= 18.5) && ($imc <= 24.9)) {
    echo ' normal';
  }
  if (($imc >= 25) && ($imc <= 29.9)) {
    echo 'Sobrepeso';
  }
  if (($imc >= 30) && ($imc <= 34.9)) {
    echo 'Obseidade grau 1';
  }
  if (($imc >= 35) && ($imc <= 39.9)) {
    echo 'Obesidade grau 2';
  }
  if ($imc >= 40) {
    echo 'Obesidade grau 3';
  }