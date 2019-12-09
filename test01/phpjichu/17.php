<?php

$arr = array('a','b','c','d','e');

for($i=0;$i<count($arr);$i++){
    echo $arr[$i].'<br>';
}

$arr = array('name'=>'zhangsan' , 'age'=>24 , 'area'=>'Beijing');

foreach ($arr as $k => $v) {
    echo $k,':',$v,'<br>';
}
print_r(array_keys($arr));

$stu = array('lisi'=>3,'wang'=>5,'zhao'=>6);

foreach ($stu as $key => $value) {
    $stu[$key] = $value*2;
}
print_r($stu);
?>