<?php

function cenzura($zdanie){
    $zbanowane = array("jeden", "dwa", "trzy");
    foreach ($zbanowane as $slowo){
        $zmiana = str_repeat('*', strlen($slowo));
        $zdanie = str_ireplace($slowo,$zmiana,$zdanie);
        return $zdanie;
    }
}
