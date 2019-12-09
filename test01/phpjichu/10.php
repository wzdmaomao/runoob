<?php

//开始留言
$str = $_POST['title']. ','. $_POST['content']. "\n";
//fh是一个变量，资源类型变量
$fh = fopen('./msg.txt', 'a');
//往文件写东西
fwrite($fh, $str);
fclose($fh);

echo 'ok';

 ?>
