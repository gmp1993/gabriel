<?php
print "Programa para ler dois n�meros reais: ";

print "\nDigite o valor do primeiro n�mero: ";
$x1 = trim(fgets(STDIN));
print "\nDigite o valor do segundo n�mero: ";
$x2 = trim(fgets(STDIN));

if ($x1 < $x2) {
	print "\nx2 � maior que " . $x1;
}
else {
	print "\nx1 � maior do que " . $x2;
}