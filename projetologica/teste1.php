<?php
print "Olá!\n";


$x = 5;
$y = 2 * $x;
print $y; 

print "Digite um número:\n ";
$x = trim(fgets(STDIN));
$y = 2 * $x;
print "Dobro de " . $x . "=" . $y;