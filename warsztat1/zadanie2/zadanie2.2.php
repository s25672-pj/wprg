<?php
function narodowsc($kraj) {
    $narodowosci = array(
        "Polska" => "Polak",
        "Niemcy" => "Niemiec",
        "Francja" => "Francuz",
        "Włochy" => "Włoch",
        "Hiszpania" => "Hiszpan",
        "Anglia" => "Anglik",
        "Japonia" => "Japończyk",
        "Brazylia" => "Brazylijczyk"
    );
    if (array_key_exists($kraj, $narodowosci)) {
        return $narodowosci[$kraj];
    } else {
        return "Brak narodowści w bazie";
    }
}