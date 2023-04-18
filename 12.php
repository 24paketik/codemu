<?php
	class Employee
	{
		public $name;
		public $salary;
		public $age;

		public function checkAge(){
			if ($this->age > 18){
				return 'true';
			}
			else{
				return 'false';
			}
		}
	}
?>