<?php

	echo "time(): " . time();
	echo "<br>";
	echo "mktime(): " . mktime(1, 54, 0, 9, 24, 2017);
	echo "<br>";
	echo "strtotime(): " . strtotime("+ 1 day");
	echo "<br>";
	$checkdate = checkdate(2, 31, 2000) ? 'true' : 'false';
	echo "checkdate(): " . $checkdate;
	echo "<br>";
	$time_stamp = time();
	echo "Time formate by date(): " . date("d/m/y", $time_stamp);
	echo "<br>";
	echo "Time formate by strftime(): " . strftime("%d/%m/%y", $time_stamp);
	echo "<br>";
	echo "12 hour time formate with strftime(): " . strftime("%I:%M:%S %p", $time_stamp);
	echo "<br>";
	echo "mysql formate date and time with strftime(): " . strftime("%Y-%m-%d %H:%M:%S", $time_stamp);
	
	
	
	
?>