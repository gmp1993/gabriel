<?php
print "Programa para ler dois n�meros";

print "\nDigite o primeiro n�mero: ";
$n1 = trim(fgets(STDIN));
print "\nDigite o segundo n�mero: ";
$n2 = trim(fgets(STDIN));

$soma = $n1 + $n2;
print "\nA soma dos n�meros �: " .$soma;