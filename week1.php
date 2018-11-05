<?php
//实现1+2+3.....+100的和的三种方式
//
//
//第一种：
function one()
{
	$a = 0;
	for ($i=1; $i <= 100; $i++) { 
		$a+=$i;
	}

	return $a;
}
echo one();
echo "<hr>";


//第二种：
//
function two()
{

	$a=0;
	$i=1;
	do{
		$a+=$i;
		$i++;
	}while($i<=100);
	return $a;
}
echo two();
echo "<hr>";

//第三种：
//
function three()
{
	$a=0;
	$i=1;
	while ( $i<= 100) {
		$a+=$i;
		$i++;
	}

	return $a;
}

echo three();
echo "<hr>";



//阶乘题
//
function jiecheng($n)
{

	$t=1;
	do{
		$t=$t*$n;
		$n--;
	}while ($n>=1);
	return $t;
}

echo jiecheng(6);
echo "<hr>";


//判断是否是回调函数
function ishuiwen($str){
  $len=strlen($str);
  $l=1;
  $k=intval($len/2)+1;
   for($j=0;$j<$k;$j++){
    if (substr($str,$j,1)!=substr($str,$len-$j-1,1))
     {
  $l=0;
  break;
   }
 }
 if ($l==1)
 {
 return "是回文字符串";
 }
 else
 {
 return "不是回文字符串";
  }
 }
 $str='abccba';
 echo ishuiwen($str);
 echo "<hr>";


 class Person
 {
 	private $name;
 	private $age;
 }

interface Walk
 {
 	public function walk($name);
 }

 Class Student extends Person implements Walk
 {

 }

?>