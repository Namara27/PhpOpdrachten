<?php
session_start();

if (isset($_SESSION["user"]) && $_SESSION["user"] ["rol"] == "Administrator") {
    echo "<h1>Welkom " . $_SESSION["user"] ["naam"]. " op het admin gedeelte</h1>";
    echo "<p><a href='login.php'>Login</a></p>";
} else {
    header('location: login.php');
}
