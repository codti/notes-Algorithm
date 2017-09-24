<?php

include './quick-sort.php';

//排序值的范围1-1000
function bucket_sort($arr)
{
	$bucket_arr = [];

	// 桶的范围是0-9,10-19,20-29 ...... 990-999,1000
	foreach ($arr as $v) {
		$key = floor($v/10);
		$bucket[$key][] = $v;
	}

	// 对每个桶单独做排序 ， 最后将数据合并
	for ($i=0 ; $i<= 100 ;$i++) {
		if (!isset($bucket[$i])) {
			continue;
		}
		quick_sort($bucket[$i] , 0 , count($bucket[$i])-1);
		foreach ($bucket[$i] as $v) {
			$bucket_arr[] = $v;
		}
	}

	return $bucket_arr;
}

$sortarr = bucket_sort($arr);
print_r($sortarr);