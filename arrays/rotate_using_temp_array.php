<?php

/*
| METHOD 1 (Using temp array)
|
| Input arr[] = [1, 2, 3, 4, 5, 6, 7], d = 2, n =7
|  1) Store the first d elements in a temp array
|   temp[] = [1, 2]
|  2) Shift rest of the arr[]
|   arr[] = [3, 4, 5, 6, 7, 6, 7]
|  3) Store back the d elements
|   arr[] = [3, 4, 5, 6, 7, 1, 2]
*/

$array = [1, 2, 3, 4, 5, 6, 7];

function rotate($array, $d, $n)
{
    $temp = array_splice($array, 0, $d);

    return array_merge($array, $temp);
}

var_dump(rotate($array, 2, 7));
