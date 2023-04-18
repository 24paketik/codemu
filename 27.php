<?php
	class Student 
	{
		public $name;
		public $course;
		
		public function setCourse($course)
		{
			if ($this->iscourseCorrect($course)) {
				$this->course = $course;
			}
		}
		
		private function iscourseCorrect($course)
		{
			return $course >= 1 and $course <= 5;
		}

		private function transferToNextCourse($course)
		{
			return $course = $course+1;
		}
	}
	$user = new Student;
	$user->setCourse(2);
	echo $user->course;
?>