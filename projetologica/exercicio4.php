<?php
print "Programa para ler os valores de quatro n�meros";

print "\nDigite o valor do primeiro n�mero: ";
$n1 = trim(fgets(STDIN));
print "\nDigite o valor do segundo n�mero: ";
$n2 = trim(fgets(STDIN));
print "\nDigite o valor do terceiro n�mero: ";
$n3 = trim(fgets(STDIN));
print "\nDigite o valor do quarto n�mero: ";
$n4 = trim(fgets(STDIN));

$media = ($n1 + $n2 +$n3 + $n4)/4;
print "\nO valor da m�dia � de: " . $media;

if ($media >= 6){
	print "\nAprovado";
	
}
else {
	print"\nReprovado";
}


