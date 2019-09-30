<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$servername;dbname=school;port=3306", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully.<br>";
    foreach($conn->query('SELECT * from cursist') as $row) {
        print_r($row);
    }
    $conn = null;
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>