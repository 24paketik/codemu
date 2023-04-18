<?php
	class Employee
	{
		public $name;
		public $salary;
		public $age;

		public function getSalary(){
			return $this-> salary;
		}
	}

	$user1 = new Employee;
	$user1->name = 'john';
	$user1->salary = 25;

	$user2 = new Employee;
	$user2->name = 'john';
	$user2->salary = 25;
	echo $user1->getSalary() + $user2->getSalary();
?>