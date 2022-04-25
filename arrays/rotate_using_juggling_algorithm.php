<?php


/*
| METHOD 3 (A Juggling Algorithm)
|
| Let arr[] be {1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12}
|  1) Elements are first moved in first set
|   arr[] after this step --> {4 2 3 7 5 6 10 8 9 1 11 12}
|  2) Then in second set.
|   arr[] after this step --> {4 5 3 7 8 6 10 11 9 1 2 12}
|  3) Finally in third set.
|   arr[] after this step --> {4 5 6 7 8 9 10 11 12 1 2 3}
*/

$array = [1, 2, 3, 4, 5, 6, 7];

function greatestCommonDivider($a, $b)
{
    if ($b === 0) {
        return $a;
    }

    return greatestCommonDivider($b, $a % $b);
}

function rotate($array, $d, $n)
{
    /* to handle if d >= n */
    $d %= $n;
    $GCD = greatestCommonDivider($d, $n);

    for ($i = 0; $i < $GCD; $i++) {
        $temp = $array[$i];
        $j = $i;

        while (true) {
            $k = $j + $d;

            if ($k >= $n) {
                $k -= $n;
            }

            if ($k === $i) {
                break;
            }

            $array[$j] = $array[$k];
            $j = $k;
        }

        $array[$j] = $temp;
    }

    return $array;
}

var_dump(rotate($array, 2, 7));
