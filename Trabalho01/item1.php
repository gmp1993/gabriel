<?php
print "Qual o sexo do cliente (f/m): ";
$sexo = trim(fgets(STDIN));

if ($sexo == 'f' || $sexo == 'F'){
	$entrada = 8.00;
	print "\nValor da entrada: ". $entrada;
}

else {
	$entrada = 10.00;
	print "\nValor da entrada: " . $entrada;
}

print "\nQuantas cervejas foram consumidas: ";
$qcerva = trim(fgets(STDIN));

$cerva = $qcerva * 2.50;

print "\nQuantos refrigerantes foram consumidos: ";
$qrefri = trim(fgets(STDIN));

$refri = $qrefri * 2.10;

print "\nQuantos espetinhos foram consumidos: ";
$qespe = trim(fgets(STDIN));

$espe = $qespe * 4.00;

$comida = $cerva + $refri + $espe;

$total = $comida + $entrada;

$garcom = $total * 10/100;

$totalreal = $total + $garcom;

print "\nValor da conta: ";

print "\nR$ " . $entrada . " (valor b�sico)";

print "\nR$ " . $comida . " (bebida e comida)";

if ($total < 15.00) {
	print "\nValor pago aos cantores: R$3.00";
}
else {
	print "\nValor pago aos cantores: R$0.00";
}

print "\nR$ " . $total . " (subtotal sem 10%)";

print "\n--------------------------------------";

print "\nR$ " . $totalreal . "(total)";



