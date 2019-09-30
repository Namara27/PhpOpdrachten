<?php

try {
//connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=opdracht6.2;port=3306", $username, $password);

    //Check if its a match
    if (isset($_POST['knop'])) {
        $email = $_POST['email'];
        $wachtwoord = $_POST['wachtwoord'];

        $match = $conn->query("SELECT email, wachtwoord FROM inlog WHERE email = '$email' AND wachtwoord = '$wachtwoord'");
        foreach ($match as $row) {
            echo "Welkom";
        }

    }
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
