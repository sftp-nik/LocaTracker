<?php

if (isset($_GET["lat"]) && isset($_GET["long"])) {
    $myfile = fopen("location.txt", "w");
    $txt = "lat: " . $_GET["lat"] . "\nlong: " . $_GET["long"];
    fwrite($myfile, $txt);
    fclose($myfile);
} else {
    echo "Latitude and longitude not set.";
}

?>