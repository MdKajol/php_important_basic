<?php
/* 
	array_shift() will delete the first element from an array
 */
	echo "Original Array<br>";
	$arr = array(
		1, 2, 3, 4, 5, 6
	);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// without assign shifting
	echo "After Shifting<br>";
	array_shift($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// with assign
	echo "After Shifting with assigning to new variable<br>";
	$shift_value_store = array_shift($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "shifted value = " . $shift_value_store . "<br>";
	
	
/* 
	array_unshift() will insert first element from an array
 */
 
	// array_unshift
	echo "<br>After unshifting an array";
	array_unshift($arr, 'insert_by_array_unshift_function');
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
/* 
	array_pop() will delete the last element from an array
 */
 
	// without assign array_pop
	echo "<br>After poping an array";
	array_pop($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	
	// with assign array_pop
	echo "After Array pop with assigning to new variable<br>";
	$pop_value_store = array_pop($arr);
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	echo "poped value = " . $pop_value_store . "<br>";
	
/* 
	array_push() will insert new element in the last of an array
 */
 
	// array_push
	echo "<br>After array_push an array";
	array_push($arr, 'insert_by_array_push_function');
	echo "<pre>";
	print_r($arr);
	echo "</pre>";
	

	
?>