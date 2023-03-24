<?php
function peselNaDate($pesel) {
    $rok = substr($pesel, 0, 2);
    $miesiac = substr($pesel, 2, 2);
    $dzien = substr($pesel, 4, 2);
    if ($miesiac > 80 && $miesiac < 93) {
        $rok += 1800;
        $miesiac -= 80;
    }
    elseif ($miesiac > 0 && $miesiac < 13) {
        $rok += 1900;
    }
    elseif ($miesiac > 20 && $miesiac < 33) {
        $rok += 2000;
        $miesiac -= 20;
    }
    elseif ($miesiac > 40 && $miesiac < 53) {
        $rok += 2100;
        $miesiac -= 40;
    }
    elseif ($miesiac > 60 && $miesiac < 73) {
        $rok += 2200;
        $miesiac -= 60;
    }
    else {
        return false;
    }
    $data = sprintf("%02d-%02d-%04d", $dzien, $miesiac, $rok);
    return $data;
}