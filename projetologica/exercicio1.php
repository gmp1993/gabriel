<?php
print "Programa para ler dois números";

print "\nDigite o primeiro número: ";
$n1 = trim(fgets(STDIN));
print "\nDigite o segundo número: ";
$n2 = trim(fgets(STDIN));

$soma = $n1 + $n2;
print "\nA soma dos números é: " .$soma;