<?php
//��ȡ����ĳ��� - count() ����
$car=array("Volvo","BMW","Toyta");
//echo count($car);
$arrlength=count($car);
//������ֵ����
//for($x=0;$x<$arrlength;$x++){
//    echo $car[$x];
//    echo "<br>";
//}

//��������
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
//echo "Peter is " . $age['Peter'] . " years old.";
//������������
foreach($age as $k=>$v){
    echo "Key=" . $k . ", Value=" . $v;
    echo "<br>";
}