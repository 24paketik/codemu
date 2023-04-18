<?php
	class User
	{
		public $name;
		public $age;

		public function setAge($age)
		{
			$this->age = $age; // запишем новое значение свойства name
		}
	}
	$user = new User;
	$user->name = 'john';
	$user->age = 25;
	$user->setAge(26);
	
	echo $user->age;
?>