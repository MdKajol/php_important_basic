<?php
	$x = "y";
	$y = "y value";
	/*
		$$x = $y; ($x = y)
		$y = "y value";
		finaly we can say that
		$$x = "y value";
	*/
	echo $$x;
	echo "<br><br>";
	
	$num = "_0";
	$_1 = 1;
	$_2 = 2;
	$_3 = 3;
	$_4 = 4;
	$_5 = 5;
	// can not do like this $("_" . $i); it will cause an error
	// not work
	$i = 1;
	while ($i <= 5) {
		//echo $("_" . $i);  // give an error
		$count = "_" . $i; // it will print _1, _2, _3 ... string
		echo $count;
		echo "<br>";
		$i++;
	}
	
	// work perfectly 
 	$i = 1;
	while ($i <= 5) {
		$num = "_". $i;	
		echo $$num;
		echo "<br>";
		$i++;
	}
	
	$room_a = "Hasan";
	$room_b = "rony";
	$room_nor = array('norm1', 'norm2', 'norm3');
	$room_c = "yean";
	$room_vip = array('vip1', 'vip2', 'vip3');
	
	$hotel_rooms = array ('room_a', 'room_b', 'room_c', 'room_nor', 'room_vip');
	
	foreach ($hotel_rooms as $room) {
		if(is_array($$room)) {
			echo "In <b>" . $room . "</b> reserve for ";
			foreach ($$room as $room) {
				echo "<b>" . $room . ", </b> ";
			}
			echo "<br>";
		} else {
			echo "In <b>" . $room . "</b> reserve for <b>" . $$room . "</b><br>";
		}	
	}


?>