<?php

$arr = array(8, 4, 90, 9, 990 , 1 , 655, 55,34, 67, 1, 26, 17);

function quick($arr) {
	
	$len = count($arr);

	$left = $right = [];

	if ($len <=1) {
		return $arr;
	}

	$basic = $arr[0];

	for ($i=1; $i < $len ; $i++) { 
		if ($arr[$i] < $basic) {
			$left[] = $arr[$i];
		}
		else
		{
			$right[] = $arr[$i];
		}
	}

	return array_merge(quick($left) , [$basic] ,  quick($right));
}







// 原地快速排序函数
function quick_sort (&$arr , $left ,$right) {

	// 如果起始索引位置大于结束索引位置，结束调用
	if ($left > $right) {
		return false;
	}

	// partition函数的返回值$storeIndex ,是数组$arr被分组后的分组值位置索引，
	// 索引小于$storeIndex的数组值小于$arr[$storeIndex] 
	// 索引大于$storeIndex的数组值大于$arr[$storeIndex] 
	$storeIndex = partition($arr , $left , $right);

	// 对小于$arr[$storeIndex]的值，再次调用quick_sort进行分组
	quick_sort($arr , $left ,$storeIndex-1);

	// 对大于$arr[$storeIndex]的值，再次调用quick_sort进行分组
	quick_sort($arr ,$storeIndex+1 , $right);

}

//分组函数
function partition (&$arr , $left ,$right) {

	// 分组参照值
	$part = $arr[$left];

	// 用来存放小于$part值得 存储位置索引 
	$storeIndex = $left+1;

	for ($i=$storeIndex; $i <= $right; $i++) { 
		// 循环当中，如果当前值，小于参照值， 那么把把 当前值存放到用来存放小于参照值得位置处
		// 也就是说 我们要将 当前值和$arr[$stroeIndex]进行交换
		if ($arr[$i] < $part) {
			list($arr[$i] , $arr[$storeIndex]) = [$arr[$storeIndex] , $arr[$i]];
			$storeIndex++;
		}
	}
	
	// 将参照值和索引-1处的值进行交换，
	list($arr[$left] , $arr[$storeIndex-1]) = [$arr[$storeIndex-1] , $arr[$left]];
	// 返回参照值得索引
	return $storeIndex-1;
}

// quick_sort($arr , 0 , count($arr)-1);
// print_r($arr);








