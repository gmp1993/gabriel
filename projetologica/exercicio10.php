<?php
print "Programa para ler os coeficientes de uma equa��o";

print "\nDigite o valor do coeficiente 'a': ";
$a = trim(fgets(STDIN));
print "\nDigite o valor do coeficiente 'b': ";
$b = trim(fgets(STDIN));
print "\nDigite o valor do coeficiente 'c': ";
$c = trim(fgets(STDIN));

$delta = pow($b, 2) - 4*$a*$c;

if ($delta < 0) {
	print "\nEsta equa��o n�o possui ra�zes reais";
}

else {
	$x1 = (-$b + sqrt($delta))/(2 * $a);
	$x2 = (-$b - sqrt($delta))/(2 * $a);
	print "\nRaizes da equa��o: ";
	print "\nx1 = " . $x1;
	print "\nx2 = " . $x2;
}