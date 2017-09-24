<?php

// 递归的法
function merge_sort($arr) {

	$len = count($arr);
	if ($len <= 1) {
		return $arr;
	}
	$half = ($len>>1) + ($len&1);

	$arr_split = array_chunk($arr, $half);
	$left = merge_sort($arr_split[0]);
	$right = merge_sort($arr_split[1]);

	while ($left && $right) {
		if ($left[0] < $right[0]) {
			$reg[] = array_unshift($left);
		}
		else
		{
			$reg[] = array_unshift($right);
		}
	}

	return array_merge($reg , $left , $right);
}
$arr = array(101 , 22 , 435 ,99 , 30 , 90 , 31 , 66);
print_r(merge_sort($arr));