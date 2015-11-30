<?php
function binarySearch(&$tab, $left, $right, $search) {
    if ($left > $right) {
        return false;
    } else {
        $mid = floor(($left + $right) / 2);

        if ($tab[$mid] === $search) {
            echo $tab[$mid] . ' index: ' . $mid;
            return $mid;
        } elseif ($tab[$mid] > $search) {
            return binarySearch($tab, $left, $mid - 1, $search);
        } else {
            return binarySearch($tab, $mid + 1, $right, $search);
        }
    }
}

$tab = [1, 2, 6, 18, 20, 23, 29, 32, 34, 39, 40, 41];
$search = 2;

$indexResult = binarySearch($tab, 0, count($tab) - 1, $search);
var_dump($indexResult);
?>

