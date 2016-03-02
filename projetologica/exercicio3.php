<?php
print "\nPrograma para ler quatro números";

print "\nDigite o primeiro número: ";
$n1 = trim(fgets(STDIN));
print "\nDigite o segundo número: ";
$n2 = trim(fgets(STDIN));
print "\nDigite o terceiro número: ";
$n3 = trim(fgets(STDIN));
print "\nDigite o quarto número: ";
$n4 = trim(fgets(STDIN));

$media = ($n1 + $n2 + $n3 + $n4)/4;
print "\nO valor da média aritmética é de: " . $media;
