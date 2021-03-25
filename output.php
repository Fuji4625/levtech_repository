<?php
	require("input.php");

	for($numbers =1; $numbers <= 100; $numbers++){
	if($numbers % 15 == 0){
		echo "FizzBuzz";
	}elseif($numbers % 3 == 0){
		echo "Fizz";
	}elseif($numbers % 5 == 0){
		echo "Buzz";
	}else{
		echo $numbers;
	}
	echo PHP_EOL;
	}	
	
	
?>
