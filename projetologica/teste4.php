<?php
print "Digite a nota do 1� semestre: ";
$n1 = trim(fgets(STDIN));
print "Digite a nota do 2� semestre: ";
$n2 = trim(fgets(STDIN));

$med = ($n1 + $n2)/2;

print "M�dia = " . $med;

if ($med < 60) {
	print "\nReprovado";
}

else {
	print "\nAprovado";
}
		