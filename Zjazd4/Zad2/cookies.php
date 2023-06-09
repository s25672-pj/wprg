<?php
$cookie_name = "visit_count";
$cookie_value = 1;
$cookie_expiration = time() + (60 * 60 * 24 * 365);
if (isset($_COOKIE[$cookie_name])) {
    $cookie_value = $_COOKIE[$cookie_name] + 1;
}
setcookie($cookie_name, $cookie_value, $cookie_expiration);
if ($cookie_value == 1) {
    echo "Witaj, to twój pierwszy raz tutaj.";
} elseif ($cookie_value >= 10) {
    echo "Jesteś już stałym gościem";
} else {
    echo "To Twoja " . $cookie_value . ". wizyta tutaj.";
}

