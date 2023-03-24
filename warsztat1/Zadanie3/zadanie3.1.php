<?php
function wersjaFor() {
    $liczby = array();
    for($i = 0; $i < 20; $i++){
        $liczby[] = rand(0,123);
    }

    $max = $liczby[0];
    for ($i = 1; $i < count($liczby); $i++) {
        if ($liczby[$i] > $max) {
            $max = $liczby[$i];
        }
    }
    return $max;
}
function wersjaWhile()
{
    $liczby = array();
    for($i = 0; $i < 20; $i++){
        $liczby[] = rand(0,123);
    }

    $max = $liczby[0];
    $i = 1;
    while ($i < count($liczby)) {
        if ($liczby[$i] > $max) {
            $max = $liczby[$i];
        }
        $i++;
    }
    return $max;
}

function wersjaDoWhile()
{
    $liczby = array();
    for($i = 0; $i < 20; $i++){
        $liczby[] = rand(0,123);
    }

    $max = $liczby[0];
    $i = 1;
    do {
        if ($liczby[$i] > $max) {
            $max = $liczby[$i];
        }
        $i++;
    } while ($i < count($liczby));
    return $max;
}

function wersjaForeach()
{
    $liczby = array();
    for($i = 0; $i < 20; $i++){
        $liczby[] = rand(0,123);
    }
    $max = $liczby[0];
    foreach ($liczby as $liczba) {
        if ($liczba > $max) {
            $max = $liczba;
        }
    }
    return $max;
}

