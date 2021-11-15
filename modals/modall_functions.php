<?php
function getCountries($filename = "countries.txt"){
    $file_contents = file_get_contents($filename);
    return $file_contents == "" ? [] : json_decode($file_contents, true);
}

function getCities($filename = "cities.txt"){
    $file_contents = file_get_contents($filename);
    return $file_contents == "" ? [] : json_decode($file_contents, true);
}

?>