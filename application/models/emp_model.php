<?php
	class emp_model extends CI_Controller
	{
		function addrec()
		{
			$arr=array(
		"eid"=>$this->input->post("txteid"),
		"ename"=>$this->input->post("txtename"),
		"desig"=>$this->input->post("txtedesig"),
		"salary"=>$this->input->post("txtesal")
					);

			$this->load->database();
			$this->db->insert("emp",$arr);
		}
	}

?>