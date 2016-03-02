<?php
print "Programa para saber IMC de uma pessoa";

print "Digite o seu peso: "; 
$p = trim(fgets(STDIN));
print "Digite a sua altura: ";
$a = trim(fgets(STDIN));

$imc = $p/($a * $a);
print "O seu IMC é: $imc";
