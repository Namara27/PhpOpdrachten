<?php

if ($_POST['naam'] == "") {
    echo "Je moet nog een naam invullen<br>";
}
if ($_POST['adres'] == "") {
    echo "Je moet nog een adres invullen<br>";
}
if ($_POST['email'] == "") {
    echo "Je moet nog een E-mail invullen<br>";
}
if ($_POST['wachtwoord'] == "") {
    echo "Je moet nog een wachtwoord invullen<br>";
    echo "<a href=\"opdracht5.1.html\">Terug naar formulier</a>";
}
