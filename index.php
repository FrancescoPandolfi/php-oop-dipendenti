
<?php
require_once __DIR__ . "/classes/dipendente.php";


$dipendente1 = new Dipendente(1, "A123584", "Dirigente");
$dipendente2 = new Dipendente(2, "C125684", "Impiegato");
$dipendente3 = new Dipendente(3, "A143584", "Operaio");


echo $dipendente1->getBasicInfo();

echo PHP_EOL;

echo $dipendente2->getBasicInfo();

echo PHP_EOL;

echo $dipendente3->getBasicInfo();


