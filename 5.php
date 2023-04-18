<?php
	class Employee
	{
		public $name;
		public $salary;
		public $age;
	}
	$Employee1 = new Employee;
	$Employee1->name = 'john';
	$Employee1->salary = 1000;
	$Employee1->age = 18;


	$Employee2 = new Employee;
	$Employee2->name = 'eric';
	$Employee2->salary = 2000;
	$Employee2->age = 20;

	$sumage = $Employee1->age+$Employee2->age;

	echo "Сумма возростов: $sumage";
?>