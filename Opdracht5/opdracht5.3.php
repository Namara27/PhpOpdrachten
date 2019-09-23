<?php

if ($_POST['email'] == "piet@worldonline.nl" && $_POST['wachtwoord'] == "doetje123") {
    echo "Welkom!";
    if ($_POST['email'] == "klaas@carpets.nl" && $_POST['wachtwoord'] == "snoepje777") {
        echo "Welkom!";
        if ($_POST['email'] == "truushendriks@wegweg.nl" && $_POST['wachtwoord'] == "arkiearkie201") {
            echo "Welkom!";
        }
    }
} else {
    echo "Sorry, geen toegang!";
}


