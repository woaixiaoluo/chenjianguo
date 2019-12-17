<?php
function countSegments($s){
	$arr = explode(" ",$s);
	$res = array_filter($arr);
	return count($res);
}
$s = "Hello, my name is John";
$s = "";
$res = countSegments($s);
echo "<pre>";
var_dump($res);
