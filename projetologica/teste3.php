<?php
print "Programa para ler as medidas de um terreno: ";

print "\nDigite a largura do terreno: ";
$l = trim(fgets(STDIN));
print "\nDigite o comprimento do terreno: ";
$c = trim(fgets(STDIN));
print "\nDigite o valor do metro quadrado: ";
$mq = trim(fgets(STDIN));

$area = $l * $c;
$preco = $area * $mq;
print "\nÁrea do terreno = " . $area;
print "\nPreço do terreno = R$ " . $preco;