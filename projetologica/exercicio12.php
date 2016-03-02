<?php
print "Programa para ler as medidas de um tri�ngulo: ";

print "\nDigite a primeira medida: ";
$m1 = trim(fgets(STDIN));
print "\nDigite a segunda medida: ";
$m2 = trim(fgets(STDIN));
print "\nDigite a terceira medida: ";
$m3 = trim(fgets(STDIN));

$t = ($m1 + $m2 + $m3)/2;
$area = sqrt($t * ($t - $m1) * ($t - $m2) * ($t - $m3));

if ($m1 + $m2 < $m3 && $m1 + $m3 < $m2 && $m2 + $m3 < $m1) {
	print "\nAs medidas n�o formam um tri�ngulo";
}
else {
	print "\nA �rea � de: " . $area;
}