<?php
print "\nPrograma para ler as medidas de um ret�ngulo";

print "\nDigite o valor da base: ";
$b = trim(fgets(STDIN));
print "\nDigite o valor da altura: ";
$a = trim(fgets(STDIN));

$p = $b * 2 + $a * 2;
$area = $b * $a;

print "\nO valor do per�metro �: " . $p;
print "\nO valor da �rea �: " . $area;

