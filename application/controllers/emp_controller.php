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

		function empshowall()
		{
			$this->load->model("emp_model");
			$s["r"]=$this->emp_model->showallrec();
			$this->load->view("empshow_view",$s);
		}

		function empsearch()
		{
			$this->load->view("empsearchform_view");
		}

		function empsearcher()
		{
			$this->load->model("emp_model");
			$s["r"]=$this->emp_model->searchrec();
			$this->load->view("empupdateform_view",$s);
		}

		function empupdate()
		{
			$this->load->model("emp_model");
			$this->emp_model->updaterec();
			$this->empshowall();
		}
	}


?>