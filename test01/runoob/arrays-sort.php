<?php
$car=array("Volvo","BMW","Toyta");
//sort() - 对数组进行升序排列
//数组中的元素按照字母升序排列
sort($car) ;
print_r($car);
//数组中的元素按照数字升序排列
$numbers=array(4,6,2,22,11);
sort($numbers);
print_r($numbers);
//rsort() - 对数组进行降序排列
//数组中的元素按照字母降序排列
rsort($car);
print_r($car);
//数组中的元素按照数字降序排列
rsort($numbers);
print_r($numbers);
//asort() - 根据关联数组的值，对数组进行升序排列
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
asort($age);
print_r($age);
//ksort() - 根据关联数组的键，对数组进行升序排列
ksort($age);
print_r($age);
//arsort() - 根据关联数组的值，对数组进行降序排列
//krsort() - 根据关联数组的键，对数组进行降序排列
