<?php
function losowaLiczba($index) {
    $liczby = array();
    for ($i = 0; $i < 20; $i++) {
        $liczby[$i] = rand(1, 100);
    }
    if (array_key_exists($index, $liczby)) {
        return $liczby[$index];
    } else {
        return false;
    }
}