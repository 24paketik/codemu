<?php
	class Rectangle
	{
		public $width;
		public $height;
		public $Perimeter;

		public function getPerimeter()
		{
				$this->Perimeter = ($this->width*2)+($this->height*2);
		}
	}
?> 