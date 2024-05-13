<?php
function bubbleSort($arr) {
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - $i - 1; $j++) {
            if ($arr[$j] < $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}

$numbers = array(1,5,2,4,5,8,5,89,-98,0,0,-5,7,8,9);
echo "lista inicial del arraycito: " . implode(", ", $numbers) . "\n";
$sortedNumbers = bubbleSort($numbers);
echo "Lista ordenada del arraycito: " . implode(", ", $sortedNumbers);

?>