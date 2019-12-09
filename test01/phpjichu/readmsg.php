<?php

$tid = $_GET['tid'];

//echo '你想看第',$tid,'行留言';


//打开文件

$fh = fopen('./msg.txt', 'r');

#var_dump(fgetcsv($fh));
$i = 1;

while (($row = fgetcsv($fh)) != false) {
 	if($tid == $i){
 		echo '<h1>' ,$row[0],'</h1>';
 		echo '<p>' , $row[1],'</p>';
 	}
 	$i++;
  // print_r($row);
}


?>

<a href= 'msg.php'>首页</a>
<a href= '10.html'>留言</a>
