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

		public function transferToNextCourse($course)
		{
			return $this->course = $this->course + 1;
		}
	}
	$user = new Student;
	$user->setCourse(2);
	$user->transferToNextCourse();
	echo $user->course;
?>