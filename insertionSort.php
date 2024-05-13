<?php

function insertionSort($arr) {
    $n = count($arr);
    for ($i = 1; $i < $n; $i++) {
        $key = $arr[$i];
        $j = $i - 1;
        while ($j >= 0 && $arr[$j] > $key) {
            $arr[$j + 1] = $arr[$j];
            $j--;
        }
        $arr[$j + 1] = $key;
    }
    return $arr;
}

$names = array("gato", "chucho", "perico", "tamal", "pitbull");
echo "Lista desordenada: " . implode(", ", $names) . "\n";
$sortedNames = insertionSort($names);
echo "Lista ordenada: " . implode(", ", $sortedNames);


?>