<?php 
function Calculos($a,$b){
	echo ($a+$b).'<br>';
	echo ($a-$b).'<br>';
	echo ($a*$b).'<br>';
	if($b!=0) echo ($a/$b).'<br>';
}
calculos(10,7);
calculos(10,0);