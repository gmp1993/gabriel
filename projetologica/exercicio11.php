<?php
print "Programa para ler as medidas de um tri�ngulo";

print "\nDigite a primeira medida: ";
$n1 = trim(fgets(STDIN));
print "\nDigite a segunda medida: ";
$n2 = trim(fgets(STDIN));
print "\nDigite a terceira medida: ";
$n3 = trim(fgets(STDIN));

if ($n1 + $n2 > $n3 && $n1 + $n3 > $n2 && $n2 + $n3 > $n1){
	print "\nAs medidas formam um tri�ngulo";
}
else {
	print "\nAs medidas n�o formam um tri�ngulo";
}