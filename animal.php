<?php
	class Animal {
		public $cry = "bowbow!";

		function bow() {
			//echo "bowbow!" . PHP_EOL;
			echo $this ->cry . PHP_EOL;
		}
	}
	
	class Dog extends Animal{
		public $cry = "わんわん！";
	}

	class Cat extends Animal{
		public $cry = "ニャーニャー";
	}

	$animal_1 = new Animal();
	$animal_1-> bow();
	$animal_2 = new Dog();
	$animal_2-> bow();
	$animal_3 = new Cat();
	$animal_3-> bow();

?>
