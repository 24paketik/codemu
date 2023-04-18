<?php
	class User
	{
		public $name;
		public $age;
		
		public function isAgeCorrect($age)
		{
			if ($age >= 18 and $age <= 60) {
				return true;
			} else {
				return false;
			}
		}
		
		public function setAge($age)
		{
			if ($this->isAgeCorrect($age)) {
				$this->age = $age;
			}
		}
		
		public function addAge($years)
		{
			$newAge = $this->age + $years;
			if ($this->isAgeCorrect($newAge)) {
				$this->age = $newAge;
			}
		}
	}
?>