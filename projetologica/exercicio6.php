<?php
print "Programa para ler dois números reais: ";

print "\nDigite o valor do primeiro número: ";
$x1 = trim(fgets(STDIN));
print "\nDigite o valor do segundo número: ";
$x2 = trim(fgets(STDIN));

if ($x1 < $x2) {
	print "\nx2 é maior que " . $x1;
}
else {
	print "\nx1 é maior do que " . $x2;
}