<?php

$arr = array(101 , 22 , 435 ,99 , 30 , 90 , 31 , 66);

// 冒泡排序
function bubble_sort (&$arr)
{
    for ($i=0; $i <count($arr) ; $i++) {
        for ($j=0; $j < count($arr)-1; $j++) {
            if ($arr[$j] > $arr[$j+1] ) {
                list($arr[$j],$arr[$j+1]) = [$arr[$j+1],$arr[$j]];
            }
        }
    }
}

bubble_sort($arr);


 print_r($arr);
