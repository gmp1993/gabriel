<?php
print "Programa para ler um n�mero";

print "\nDigite o valor do n�mero: ";
$x = trim(fgets(STDIN));

if ($x > 0) {
	print "\nO n�mero � positivo"; 
} 
else {
	if ($x == 0){
		print "\nO n�mero � nulo";
	}
	
	else {
		print "\nO n�mero � negativo";
	}
	
}



