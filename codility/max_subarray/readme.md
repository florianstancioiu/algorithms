
You are given an array [5, -7, 3, 5, -2, 4, -1] and you need to find the biggest subarray by sum.
Note: You need to find the maximum sum, not the pointers of the array.

There are multiple implementations, the brute force versions usually take O(n<sup>3</sup>) or O(n<sup>2</sup>).

There is also a golden solution called Kadane's Algorithm, here is an implementation:


```php
<?php

function kadane(array $a): int {
    $max = $max_global = 0;

    for ($i=0; $i<sizeof($a); $i++) {
        $max = max($a[$i], $max + $a[$i]);
        $max_global = max($max_global, $max);
    }

    return $max_global;
};
```
