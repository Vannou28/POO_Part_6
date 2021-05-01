<?php 

include_once 'Speedometre.php';

$km = 5.5;
$milles = 5.5;

echo Speedometre::converterKmToMilles($km) . "Milles".PHP_EOL;
echo Speedometre::converterMillesToKM($milles) . "Km";