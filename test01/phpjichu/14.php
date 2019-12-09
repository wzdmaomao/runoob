<?php

// $str1 = 'abc d';
// $str2 = '中国';
// echo strlen($str1).'<br>';
// echo strlen($str2).'<br>';
// echo mb_strlen($str2, 'utf-8');
// $str = 'abcde';
// echo strpos($str, 'c');
// if (strpos($str, "a")==false) {
//     echo "yes";
// }else{
//     echo "no";
// }

// if (strpos($str, "a")===false) {
//     echo "yes";
// }else{
//     echo "no";
// }
//str_replace —  子字符串替换
// $reply = 'fuck you';

// echo str_replace('fuck', 'f**k', $reply);


//strtr —  转换指定字符
$str = ' 男人 , 女人 , 男孩 , 女孩 ';
echo strtr($str, array('男'=>'女', '女'=>'男'));


echo '<hr>';
//  截取子字符串
// substr
// substr —  返回字符串的子串

$str = 'helloworld';

echo substr($str,5),'<br>';
echo substr($str,3,5),'<br>';

echo substr($str,-5),'<br>';
echo substr($str,-5,3),'<br>';
echo substr($str,-5,-3),'<br>';
echo '<hr>';
//explode —  使用一个字符串分割另一个字符串 , 返回一个数组
$str='php,mysql,study';
print_r(explode(',', $str));
echo '<hr>';
//implode —  将一个一维数组的值转化为字符串
$arr = array('name'=>'zhangsan','age'=>23,'gender'=>'man');
echo implode(',', $arr);
echo '<hr>';
//截取文件的后缀名
$file = 'a.jpg';
echo substr($file, strpos($file, '.')+1);
$arr = explode('.', $file);
echo $arr[count($arr)-1];
echo '<hr>';
echo strrchr($file, '.');
 ?>