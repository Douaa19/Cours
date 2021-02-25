<?php
	$monNom = "LR";
	$monPrenom = "DO";
	$monAge = "24ans";

	echo "\nHello YouCode!";
	echo "\n";

	echo "$monNom  $monPrenom  $monAge";
	echo "\n";

	echo '$monNom  $monPrenom  $monAge';
	echo "\n";

	echo <<<"EOT"

	$monNom  $monPrenom  $monAge

	EOT;
	echo "\n";

	echo <<<'EOT'

	$monNom  $monPrenom  $monAge
	
	EOT;
?>

