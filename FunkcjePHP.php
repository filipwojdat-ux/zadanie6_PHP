<?php

function suma($a, $b){
    echo "Suma: " . ($a + $b);
}

function podstawy($a, $b){
    echo "Różnica: " . ($a - $b) . "<br>";
    echo "Iloczyn: " . ($a * $b) . "<br>";
    if ($b == 0) {
        echo "Iloraz: nie można dzielić przez 0";
    } else {
        echo "Iloraz: " . ($a / $b);
    }
}
function kalkulator($a, $b, $dzialanie){
    switch ($dzialanie) {
        case 'suma':
            $wynik = $a + $b;
            break;
        case 'roznica':
            $wynik = $a - $b;
            break;
        case 'iloczyn':
            $wynik = $a * $b;
            break;
        case 'iloraz':
            $wynik = ($b == 0) ? "nie można dzielić przez 0" : $a / $b;
            break;
        default:
            $wynik = "nieznane działanie";
    }
    echo "<div id='wynik'>Wynik: $wynik</div>";
}

function maks($a, $b, $c){
    $max = $a;
    if ($b > $max) $max = $b;
    if ($c > $max) $max = $c;
    echo "Największa liczba: $max";
}

function wzrost($w){
    if ($w < 150) {
        echo "Wzrost niski";
    } elseif ($w > 180) {
        echo "Wzrost wysoki";
    } else {
        echo "Wzrost średni";
    }
}

function bmi($wzrost, $waga){
    $m = $wzrost / 100;
    $bmi = $waga / ($m * $m);
    $wartosc = round($bmi, 2);
    if ($bmi < 18.5) {
        $komentarz = "za mało!";
    } elseif ($bmi > 25) {
        $komentarz = "za dużo!";
    } else {
        $komentarz = "OK!";
    }
    echo "<div id='wynik'>BMI: $wartosc – $komentarz</div>";
}

function starszy($data1, $data2){
    $d1 = strtotime($data1);
    $d2 = strtotime($data2);
    if ($d1 < $d2) {
        echo "Starsza jest osoba 1.";
    } elseif ($d2 < $d1) {
        echo "Starsza jest osoba 2.";
    } else {
        echo "Obie osoby są w tym samym wieku.";
    }
}

function przestepny($rok){
    if (($rok % 4 == 0 && $rok % 100 != 0) || $rok % 400 == 0) {
        echo "Rok $rok jest przestępny.";
    } else {
        echo "Rok $rok nie jest przestępny.";
    }
}

function sila($haslo){
    $dlugosc = strlen($haslo);

    if ($dlugosc <= 4) {
        echo "Hasło słabe (zbyt krótkie).";
    } elseif (!preg_match('/[0-9]/', $haslo)) {
        echo "Hasło słabe (brak cyfry).";
    } elseif (!preg_match('/[A-Z]/', $haslo)) {
        echo "Hasło słabe (brak dużej litery).";
    } elseif (!preg_match('/[a-z]/', $haslo)) {
        echo "Hasło słabe (brak małej litery).";
    } elseif (!preg_match('/[^A-Za-z0-9]/', $haslo)) {
        echo "Hasło słabe (brak znaku specjalnego).";
    } elseif ($dlugosc < 8) {
        echo "Hasło średnie.";
    } else {
        echo "Hasło mocne.";
    }
}

function trojkat($a, $b, $c){
    if ($a > 0 && $b > 0 && $c > 0 &&
        $a + $b > $c && $a + $c > $b && $b + $c > $a) {
        echo "Z tych odcinków można zbudować trójkąt.";
    } else {
        echo "Z tych odcinków nie można zbudować trójkąta.";
    }
}

function szyfruj($tekst){
    $wynik = "";
    for ($i = 0; $i < strlen($tekst); $i++) {
        $z = $tekst[$i];
        if ($z >= 'a' && $z <= 'z') {
            $wynik .= chr((ord($z) - 97 + 2) % 26 + 97);
        } elseif ($z >= 'A' && $z <= 'Z') {
            $wynik .= chr((ord($z) - 65 + 2) % 26 + 65);
        } else {
            $wynik .= $z;
        }
    }
    return $wynik;
}
