<?php

// static variable always retain its value
echo "Normal function without static variable<br>";
function increment(){
	$value = 1;
	echo $value . "<br>";
	$value++;
}

increment(); // output will be 1
increment(); // output will be 1
increment(); // output will be 1
echo "Normal function with static variable<br>";
function increment2(){
	static $value = 1;
	echo $value . "<br>";
	$value++;
}

increment2(); // output will be 1
increment2(); // output will be 2
increment2(); // output will be 3
	
?>