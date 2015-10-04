<?php

function partition(&$tab, $left, $right) {
    //Wybieramy pivot
    $pivot = $tab[$left];
    //Zamieniamy pivot z ostatnim elementem
    $tab[$left] = $tab[$right];
    $tab[$right] = $pivot;
    //Ustalamy liczniki
    $a = 0;
    $b = 0;
    //Sortowanie
    for ($a = 0; $a < $right; $a++) {
        if ($tab[$a] < $pivot) {
            $temp = $tab[$b];
            $tab[$b] = $tab[$a];
            $tab[$a] = $temp;
            $b++;
        }
    }
    //Powrót piwotu na wskaznik b
    $temp = $tab[$b];
    $tab[$b] = $pivot;
    $tab[$right] = $temp;
    //Index podziału tablicy
    return $b;
}

function quickSort(&$tab, $left, $right) {
    if ($left < $right) {
        $divIndex = partition($tab, $left, $right);
        quickSort($tab, $left, $divIndex-1);
        quickSort($tab, $divIndex+1, $right);
    }
}

$tab = [6, 1, 8, 4, 5, 2, 7, 3, 9];

echo "Tablica przed sortowaniem<br>";
print_r($tab);

quickSort($tab, 0, count($tab)-1);

echo "<br>Tablica po sortowaniu<br>";
print_r($tab);

?>
