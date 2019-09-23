<?php

foreach ($_POST['disney'] as $disney) {
    echo "<img src='img/" . $disney . ".jpg'>";
}