<?php
print "Programa para ler um n�mero inteiro";

print "\nDigite o valor do n�mero: ";
$x = trim(fgets(STDIN));

if ($x % 2 == 0) {
	print "\nO n�mero � par";
}

else {
	print "\nO n�mero � �mpar";
}