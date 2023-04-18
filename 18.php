<?php
	class Employee
	{
		public $name;
		public $salary;

		public function doubleSalary()
		{
				$this->salary = $this->salary*2;
		}
	}
?>