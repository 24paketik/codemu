<?php
	class User
	{
		public $name;
		public $age;

		public function setAge($age)
		{
			if ($this->age >=18) {
				$this->age = $age;
			}
		}
	}
?>