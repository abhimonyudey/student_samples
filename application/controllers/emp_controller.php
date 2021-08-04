<?php
	class emp_controller extends CI_Controller
	{
		function index()
		{
			$this->load->view("empadd_view");
		}

		function empadd()
		{
			$this->load->model("emp_model");
			$this->emp_model->addrec();
			$this->load->view("empadd_view");
			$this->load->view("empmsg_view");
		}
	}


?>