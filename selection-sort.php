<?php

$arr = array(101 , 22 , 435 ,99 , 30 , 90 , 31 , 66);

//插入排序
function selection_sort(&$arr)
{
    for ($i = 1; $i < count($arr); $i++)
    {
        $temp = $arr[$i];
        for ($j = $i - 1; $j >= 0 && $arr[$j] > $temp; $j--){
            $arr[$j + 1] = $arr[$j];
        }
        $arr[$j + 1] = $temp;
    }
}

insertion_sort($arr);

print_r($arr);
