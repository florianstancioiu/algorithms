<?php
// https://codility.com/media/train/12-BinarySearch.pdf
// 14.1
function binary_search($array, $item) : int {
    $start = 0;
    $end = sizeof($array) - 1;
    while ($end >= $start) {
        $mid = $start + floor(($end - $start) / 2);

        if ($array[$mid] == $item) {
            return $mid;
        } elseif ($array[$mid] < $item) {
            $start = $mid + 1;
        } elseif ($array[$mid] > $item) {
            $end = $mid - 1;
        }
    }

    return -1;
}

$a = [
    0,
    1,
    2,
    3,
    4,
    5,
    6,
    7,
    8
];

echo "<pre>";
echo binary_search($a, 4);
