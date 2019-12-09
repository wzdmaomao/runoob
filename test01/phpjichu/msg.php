<?php


$fh = fopen('./msg.txt', 'r');

#var_dump(fgetcsv($fh));
$i = 1;

while (($row = fgetcsv($fh)) != false) {

    echo '<li><a href="readmsg.php?tid=',$i,'">' , $row[0] , '</li>'; 
 	$i++;

}





?>