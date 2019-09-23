<?php

function naarFahrenheit($graden)
{
    $Fahrenheit = $graden * 1.8 + 32;
    return $Fahrenheit;
}

echo "Het is " . naarFahrenheit(12) . "℉" . "<br>";

function deelbaar($getal)
{
    if ($getal % 3 == 0) {
        echo "Het getal is deelbaar door 3";
        return true;
    }
}

echo deelbaar(15)."<br>";

$volgorde = '';
function omgekeerd($volgorde) {
    return strrev($volgorde);
}

echo omgekeerd('Dit is een omgekeerde string')."<br>";