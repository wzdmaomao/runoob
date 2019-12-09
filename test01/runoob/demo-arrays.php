<?php
//获取数组的长度 - count() 函数
$car=array("Volvo","BMW","Toyta");
//echo count($car);
$arrlength=count($car);
//遍历数值数组
//for($x=0;$x<$arrlength;$x++){
//    echo $car[$x];
//    echo "<br>";
//}

//关联数组
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//echo "Peter is " . $age['Peter'] . " years old.";
//遍历关联数组
foreach($age as $k=>$v){
    echo "Key=" . $k . ", Value=" . $v;
    echo "<br>";
}