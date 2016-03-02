<?php
print "\nPrograma para ler as medidas de um retângulo";

print "\nDigite o valor da base: ";
$b = trim(fgets(STDIN));
print "\nDigite o valor da altura: ";
$a = trim(fgets(STDIN));

$p = $b * 2 + $a * 2;
$area = $b * $a;

print "\nO valor do perímetro é: " . $p;
print "\nO valor da área é: " . $area;

