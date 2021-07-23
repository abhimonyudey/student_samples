<?php
	class abc extends CI_Controller
	{
		function index() // index() function is a start function
		{
			//echo "This is a abc controller";
			$this->load->view("sum_view");// to display the view file
		}

		function xyz()
		{
			echo "This is a xyz function inside abc controller";
		}

		function sum($a,$b)
		{
			$c=$a+$b;
			echo "SUM=".$c;
		}
	}

?>