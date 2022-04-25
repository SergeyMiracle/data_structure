<?php

/*
| METHOD 2 (Rotate one by one)
| leftRotate(arr[], d, n)
| start
|  For i = 0 to i < d
|    Left rotate all elements of arr[] by one
| end
|
 */

$array = [1, 2, 3, 4, 5, 6, 7];

function rotate($array, $d, $n)
{
    for ($t = 0; $t < $d; $t++) {
        $temp = $array[0];

        for ($i = 0; $i < $n - 1; $i++) {
            $array[$i] = $array[$i + 1];
        }

        $array[$n - 1] = $temp;
    }

    return $array;
}

var_dump(rotate($array, 2, 7));
