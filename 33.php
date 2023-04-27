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
	$eric = new Employee("eric", 25, 1000);
	$kyle = new Employee("kyle", 30, 2000);

	echo $eric->salary + $kyle->salary;
?>