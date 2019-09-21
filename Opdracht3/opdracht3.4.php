<html lang="en">
<body>
<style>
    img {
        height: 100px;
        width: 100px;
    }

    body {
        text-align: center;
        width: 580px;
        margin: auto;
    }

    .groen {
        border: green solid 2px;
        margin-right: 5px;
        margin-bottom: 5px;
    }

    .rood {
        border: red solid 2px;
        margin-right: 5px;
        margin-bottom: 5px;
    }
</style>
<?php

for ($i = 1; $i <= 9; $i++) {
    if ($i % 2 == 0) {
        $class = "class='rood'";
    } else {
        $class = "class='groen'";
    }
    echo "<img " . $class . "src='img/disney" . $i . ".jpg'>";
}

?>
</body>
</html>
