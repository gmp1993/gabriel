<?php
print "\nPrograma para ler as medidas dos cateto de um triângulo retângulo";

print "\nDigite o valor do cateto 1: ";
$c1 = trim(fgets(STDIN));
print "\nDigite o valor do cateto 2: ";
$c2 = trim(fgets(STDIN));

$h = sqrt($c1 * $c1 + $c2 * $c2);
print "\nO valor da hipotenusa é de: " . $h;

$a = ($c1 * $c2)/2;
$p = $c1 + $c2 + $h;

print "\nO valor da área é de: " . $a;
print "\nO valor do perímetro é de: " . $p;