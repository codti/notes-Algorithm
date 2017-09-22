<?php

$arr = array(101 , 22 , 435 ,99 , 30 , 90 , 31 , 66);

//插入排序
function selection_sort(&$arr)
{
    for ($i = 0; $i < count($arr); $i++)
    {
        $min = $i;
        for ($j = $i+1 ; $j < count($arr); $j++){
        	if ($arr[$j] <= $arr[$min]) {
        		$min = $j;
        	}
        }
        list($arr[$i] ,$arr[$min]) = [$arr[$min],$arr[$i]];
    }
}

selection_sort($arr);

print_r($arr);
