<?php
print "Deseja entrar com temperatura em Celsius ou Fahrenheit (c/f)? ";
$unidade = trim(fgets(STDIN));

if ($unidade == "c" || $unidade == "C") {
	print "Digite a temperatura em Celsius: ";
	$C = trim(fgets(STDIN));
	$F = 9 / 5 * $C + 32;
	print "\nEquivalente em Fahrenheit = $F";
}
else {
	print "Digite a temperatura em Fahrenheit: ";
	$F = trim(fgets(STDIN));
	$C = 5 / 9 * ($F - 32);
	print "\nEquivalente em Celsius = $C";
}