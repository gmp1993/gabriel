<?php
print "Digite o primeiro valor: ";
$a = trim(fgets(STDIN));
print "Digite o segundo valor: ";
$b = trim(fgets(STDIN));
print "Digite o terceiro valor: ";
$c = trim(fgets(STDIN));

if ($a < $b && $a < $c) {
	print "Menor = " . $a;
}
else {
	if ($b < $c) {
		print "Menor = ". $b;
	}
	else {
		print "Menor = ". $c;
	}
}