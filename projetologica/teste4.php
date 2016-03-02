<?php
print "Digite a nota do 1º semestre: ";
$n1 = trim(fgets(STDIN));
print "Digite a nota do 2º semestre: ";
$n2 = trim(fgets(STDIN));

$med = ($n1 + $n2)/2;

print "Média = " . $med;

if ($med < 60) {
	print "\nReprovado";
}

else {
	print "\nAprovado";
}
		