<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <title>Bakkerij Wim Vlecht</title>
</head>
<body>
<header>
    <nav>
        <a href="Formulier.html">Brood toevoegen</a>
    </nav>
</header>
<table class="broodjes">
    <tr>
        <th>Vorm brood</th>
        <th>Soort meel</th>
        <th>Gewicht brood</th>
    </tr>
    <tr>
        <td>Bolletje</td>
        <td>Spelt</td>
        <td>3 Gram</td>
    </tr>
    <tr>
        <td>Bolletje</td>
        <td>Tarwemeel</td>
        <td>3 Gram</td>
    </tr>
    <tr>
        <td>Pistoletje</td>
        <td>Volkoren</td>
        <td>2 Gram</td>
    </tr>
    <tr>
        <td>Vierkantje</td>
        <td>Bruin</td>
        <td>3 Gram</td>
    </tr>
    <tr>
        <td>Driehoekje</td>
        <td>Tarvo</td>
        <td>4 Gram</td>
    </tr>
    <tr>
        <td>Trapeziumpje</td>
        <td>Sesam</td>
        <td>10 Gram</td>
    </tr>
    <tr>
        <td>Groot Brood</td>
        <td>Wit</td>
        <td>200 Gram</td>
    </tr>
    <tr>
        <td>Groot Brood</td>
        <td>Bruin</td>
        <td>200 Gram</td>
    </tr>
    <tr>
        <td>Medium Brood</td>
        <td>Wit</td>
        <td>100 Gram</td>
    </tr>
    <tr>
        <td>Medium Brood</td>
        <td>Bruin</td>
        <td>100 Gram</td>
    </tr>
</table>
</body>
</html>

<?php
try {
//Connect to database
    $servername = "127.0.0.1";
    $username = "root";
    $password = "";

    $conn = new PDO("mysql:host=$servername;dbname=bakkerij;port=3306", $username, $password);

//Add the input to the database
    if (isset($_POST["submit"])) {
        $naam = $_POST['naam'];
        $vorm = $_POST['vorm'];
        $meel = $_POST['meel'];
        $gewicht = $_POST['gewicht'];

        $conn->query("INSERT INTO brood (Vorm, Meel, Naam, Gewicht) VALUES ('$vorm','$meel','$naam','$gewicht')");

        //Display the data in table
        $test = $conn->query("SELECT Vorm, Meel, Gewicht FROM brood");
        print "<table class ='broodjes'>";
        foreach ($test as $row) {
            print "<tr>";
            print "<td>" . $row['Vorm'] . "</td>";
            print "<td>" . $row['Meel'] . "</td>";
            print "<td>" . $row['Gewicht'] . "</td>";
            print "</tr>";
        }
        print "</table>";
    }

} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>