<?php
print "Programa para ler um número inteiro";

print "\nDigite o valor do número: ";
$x = trim(fgets(STDIN));

if ($x % 2 == 0) {
	print "\nO número é par";
}

else {
	print "\nO número é ímpar";
}