<?php
print "\nPrograma para ler quatro n�meros";

print "\nDigite o primeiro n�mero: ";
$n1 = trim(fgets(STDIN));
print "\nDigite o segundo n�mero: ";
$n2 = trim(fgets(STDIN));
print "\nDigite o terceiro n�mero: ";
$n3 = trim(fgets(STDIN));
print "\nDigite o quarto n�mero: ";
$n4 = trim(fgets(STDIN));

$media = ($n1 + $n2 + $n3 + $n4)/4;
print "\nO valor da m�dia aritm�tica � de: " . $media;
