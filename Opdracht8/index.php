<?php

include_once('lib/Radioprogramma.php');
include_once('lib/Liedje.php');

$ditprogramma = new Radioprogramma();

$nieuwLiedje = new Liedje("dit is de titel", "dit is de artiest");

$ditprogramma->voegLiedjeToe($nieuwLiedje);

foreach ($ditprogramma->getLiedjes() as $liedje) {
    echo $liedje->getTitel() . " - " . $liedje->getArtiest() . "<br>";
}



