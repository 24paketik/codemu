<?php
	class Employee 
	{
		public $name;
		public $age;
		public $salary;
		function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

	}
?>