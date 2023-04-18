<?php
	class Rectangle
	{
		public $width;
		public $height;
		public $square;

		public function getSquare()
		{
				$this->square = $this->width*$this->height;
		}
	}
?>