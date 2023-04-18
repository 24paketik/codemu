<?php
	class User
	{
		public $name;
		public $age;

		public function setAge($age)
		{
			$this->age = $age;
		}
	}
	$user = new User;
	$user->name = 'john';
	$user->age = 25;
	$user->setAge(30);
	
	echo $user->age;
?>