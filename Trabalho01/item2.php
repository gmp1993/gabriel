<?php
print "\nTotal de rendimentos banc�rios: ";
$renbanc = trim(fgets(STDIN));

print "\nTotal de rendimentos de sal�rios ou servi�os: ";
$rensal = trim(fgets(STDIN));

print "\nTotal de outros rendimentos: ";
$totaloutrosren = trim(fgets(STDIN));

print "\nServicos m�dicos pagos: ";
$sermed = trim(fgets(STDIN));

print "\nServi�os educacionais pagos: ";
$seredu = trim (fgets(STDIN));

$renbancpor = $renbanc * 20 / 100;

print "\nTotal de impostos: ";

print "\nR$ " . $renbancpor . " (sobre rendimentos banc�rios)";

if ($rensal <= 8000) {
	print "\nR$ " . $rensal . " (sobre sal�rios servi�os)";
}
else {
	if ($rensal > 8000 && $rensal < 24000) {
		$rensalpor = $rensal * 15 / 100;
		print "\nR$ " . $rensalpor . " (sobre sal�rios servi�os)";
	}
    else {
    	$rensalpor = $rensal * 20 / 100;
    	print "\nR$ " . $rensalpor . " (sobre sal�rios servi�os)";
    }
}

$totaloutrosrenpor = $totaloutrosren * 10 / 100;

print "\nR$ " . $totaloutrosrenpor . " (sobre outros rendimentos)";

$totalbancserou = $totaloutrosrenpor + $rensalpor + $renbancpor;

print "\nR$ " . $totalbancserou . " (total)";

print "\n-----------------------------------------------";

$mededupor = $totalbancserou * 30 / 100;

print "\nM�ximo a ser abatido: ";

print "\nR$ " . $mededupor;

print "\n-----------------------------------------------";

print "\nTotal de valores poss�veis de abater: ";

print "\nR$ " . $sermed . " (servi�os m�dicos)";

print "\nR$ " . $seredu . " (servi�os educacionais)";

$sermededu = $sermed + $seredu;

print "\nR$ " . $sermededu . " (total) ";

print "\n------------------------------------------------";

print "\nImposto total: ";

print "\nR$ " . $totalbancserou . " (imposto bruto)";

print "\nR$ " . $mededupor . " (abatimentos)";

$totalmedporbancserou = $totalbancserou - $mededupor;

print "\nR$ " . $totalmedporbancserou . " (total)";

?>