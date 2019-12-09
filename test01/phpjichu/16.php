<?php


$arr1 = array('ww','dd','cc');
echo $arr1[1].'<br>';
//二维数组

$arr2 = array('name'=>'lisi','hobby'=>array('basketball','football','pingpang'));
echo $arr2['hobby'][1].'<br>';
//增
$arr1[3]='ff';
print_r($arr1);
$arr2['hobby'][4]='ball';
print_r($arr2);
//改
$arr2['hobby'][0]='swiming';
print_r($arr2);
//删
unset($arr2['hobby']);
print_r($arr2);
?>