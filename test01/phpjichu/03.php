<?php
  $heart = 'good';
  if($heart == 'good'){
  	echo '烦恼';
  }else{
  	echo '开心';
  }

echo '<br />';

$rice = 1;

while ($rice < 10) {
	echo '吃',$rice,'份米饭，没饱<br />';
	$rice=$rice+1;
}

echo '吃了',$rice,'份，终于吃饱了';

?>