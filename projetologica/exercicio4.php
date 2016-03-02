<?php
print "Programa para ler os valores de quatro números";

print "\nDigite o valor do primeiro número: ";
$n1 = trim(fgets(STDIN));
print "\nDigite o valor do segundo número: ";
$n2 = trim(fgets(STDIN));
print "\nDigite o valor do terceiro número: ";
$n3 = trim(fgets(STDIN));
print "\nDigite o valor do quarto número: ";
$n4 = trim(fgets(STDIN));

$media = ($n1 + $n2 +$n3 + $n4)/4;
print "\nO valor da média é de: " . $media;

if ($media >= 6){
	print "\nAprovado";
	
}
else {
	print"\nReprovado";
}


