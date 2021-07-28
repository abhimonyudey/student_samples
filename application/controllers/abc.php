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

		function sum1()
		{
			$this->load->model("sum_model");// load the model
			$s['d']=$this->sum_model->do_sum();// call a function from that model
			$this->load->view("sum_view");
			$this->load->view("result_view",$s);
		}
	}

?>