<?php

include_once('lib/Radioprogramma.php');
include_once('lib/Liedje.php');

$ditprogramma = new Radioprogramma();
$ditprogramma->setProgrammaNaam("test");
$ditprogramma->setOmschrijving("TeSTTTTTTT");

foreach ($ditprogramma->getRadioprogramma() as $p) {
    echo $p . "<br>";
}

$nieuwLiedje = new Liedje("dit is de titel", "dit is de artiest");

$ditprogramma->voegLiedjeToe($nieuwLiedje);

foreach ($ditprogramma->getLiedjes() as $liedje) {
    echo $liedje->getTitel() . " - " . $liedje->getArtiest() . "<br>";
}



