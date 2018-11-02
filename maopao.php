<?php
$arr = array(5,6,7,8,9,10,11,12,4,3,2,1);
$len = count($arr);

for ($i=1; $i < $len; $i++) { 
	for ($j=0; $j < $len-$i; $j++) { 
		if($arr[$j]>$arr[$j+1])
		{
			$temp = $arr[$j];
			$arr[$j]=$arr[$j+1];
			$arr[$j+1]=$temp;
		}
	}
}

print_r($arr);
?>