<html lang="en">
<body>
<style>
    li {
        list-style: none;
    }

    img {
        width: 30px;
        height: 30px;
    }
</style>
<?php

$clubs = array("De spartelkuikens " => 25, "De waterbuffels " => 32, "Plonsmderin " => 11, "Bommetje " => 23);

foreach ($clubs as $club => $waarde) {
    echo "<li>" . $club . "" . $waarde . "</li>";
    for ($i = 4; $i < $waarde; $i += 5) {
        echo "<img src='img/swim.png'>";
    }
}

?>
</body>
</html>
