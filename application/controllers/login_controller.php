<?php
	class login_controller extends CI_Controller
	{
		function index()
		{
			$this->load->view("login_view");
		}

		function login()
		{
			$this->load->model("login_model");
			$s=$this->login_model->do_login();

			if($s==true)
			{
				$this->load->view("dashboard_view");
			}
			else
			{
				$this->load->view("login_view");
				$this->load->view("msg_view");
			}
		}

		function logout()
		{
			$this->session->unset_userdata("un");
			// unset_userdata used for destroy session in codeigniter
			// unset($_SESSION["un"])
			$this->load->view("login_view");
		}

	}

?>