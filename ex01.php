<?php

$tempo=readline('Qual foi o tempo gasto na viagem?');
$velocidade=readline('Qual foi a velocidade média?');

$distancia= $tempo*$velocidade;
echo 'distancia foi de :', $distancia,'km' .PHP_EOL;
$litros_usados =($distancia/12);
echo 'o total de litros usados foi: ', $litros_usados;




?>
