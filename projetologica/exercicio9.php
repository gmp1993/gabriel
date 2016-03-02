<?php
print "Programa para ler um número";

print "\nDigite o valor do número: ";
$x = trim(fgets(STDIN));

if ($x > 0) {
	print "\nO número é positivo"; 
} 
else {
	if ($x == 0){
		print "\nO número é nulo";
	}
	
	else {
		print "\nO número é negativo";
	}
	
}



