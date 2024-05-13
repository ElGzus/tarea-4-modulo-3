<?php

function mergeSort($arr) {
    $n = count($arr);
    if ($n <= 1) {
        return $arr;
    }

    $mid = (int) ($n / 2);
    $left = mergeSort(array_slice($arr, 0, $mid));
    $right = mergeSort(array_slice($arr, $mid));
    
    return merge($left, $right);
}
function merge($left, $right) {
    $result = array();
    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left);
        } else {
            $result[] = array_shift($right);
        }
    }
    while (count($left) > 0) {
        $result[] = array_shift($left);
    }
    while (count($right) > 0) {
        $result[] = array_shift($right);
    }
    return $result;
}

$names = array("ragnar", "bongo", "david", "marvin", "fernando", "jesus", "pancho", "derek");
echo "Lista desordenadeichon: " . implode(", ", $names) . "\n";
$sortednames = mergeSort($names);
echo "Lista ordenadeichon: " . implode(", ", $sortednames);


?>