<?php
	class Employee
	{
		public $name;
		public $salary;
	}
	$Employee1 = new Employee;
	$Employee1->name = 'john';
	$Employee1->salary = 1000;

	$Employee2 = new Employee;
	$Employee2->name = 'eric';
	$Employee2->salary = 2000;

	echo "Зарплата $Employee1->name $Employee1->salary , а $Employee2->name $Employee2->salary";
?>