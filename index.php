<?php
$str1 = 'aabbaa';
$str2 = 'race a car';

function checkpalimdronie($str){
	$str2 = (strrev(preg_replace("/[^A-Za-z0-9]/", '', str_replace(' ', '', strtolower($str)))));
	return ($str2 == $str) ? TRUE : FALSE;
}
echo'<pre>';var_dump( (checkpalimdronie($str1)) );echo'</pre>';

$arrValues = [1, 1, 2, 2, 3, 4, 4, 5, 5, 99, 99, 55, 55];

function isDuplicate($arr){
	$data = array_count_values($arr);
	foreach($data as $key => $v){
		if($v == 1) return $key;
	}
}

echo isDuplicate($arrValues   );
/*============================*/
/*   */
/*============================*/
$intReverse = -978683475;

function reverseinteger($int){
	$type = ($int > 0) ? '+' : '-';
	$data = '';
	$int = abs($int);
	while(($int) > 0){
		$temp = $int%10;
		$data .= $temp;
		$int = floor($int/10);
	}
	return ($type == '+') ? $data : -$data;
}
echo reverseinteger($intReverse);
/*============================*/
/*   */
/*============================*/
function reverseVouwls($str){
	$vouwels = ['a' , 'e' , 'i' , '0' , 'u'];
	$char = str_split($str);
	$replacement = array_intersect($char , $vouwels);
	$replacement = array_combine(array_keys($replacement) , array_reverse($replacement));
	$char = array_replace($char  , $replacement);
	return implode('' , $char);
}
echo reverseVouwls('stackoverflow');