<?php
print "Digite um valor num�rico X: ";
$x = trim(fgets(STDIN));
print "Digite o limite inferior 'a' do intervalo [a,b]: ";
$a = trim(fgets(STDIN));
print "Digite o limite superior 'b' do intervalo [a,b]: ";
$b = trim(fgets(STDIN));

if ($x >= $a && $x <= $b) {
	print "$x pertence ao intervalo [$a,$b]";
}

else {
	print "$x N�O pertence ao intervalo [$a,$b]";
}