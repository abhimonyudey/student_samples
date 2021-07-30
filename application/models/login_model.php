<?php
	class login_model extends CI_Model
	{
		public $u,$p;

		function do_login()
		{
			$this->u="admin";
			$this->p="123";

			if($this->u==$this->input->post("txtuser") && $this->p==$this->input->post("txtpass"))
			{
				$this->session->set_userdata("un",$this->input->post("txtuser"));
// set_userdata() used for create a session data
				//$_SESSION["un"]=$_POST["txtuser"]
				return true;
			}
			else
			{
				return false;
			}
		}
	}

?>