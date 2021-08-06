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

		function showallrec()
		{
			$this->load->database();
			$q=$this->db->get("emp"); // select * from emp
			return $q->result();
			// result() is used for fetch rows in array

		}

		function searchrec()
		{
			$this->load->database();
			// select * from emp where eid=$_POST['txteid']
			$this->db->select("*");
			$this->db->from("emp");
			$this->db->where("eid",$this->input->post("txteid"));
			$q=$this->db->get();
			return $q->result();

		}

		function updaterec()
		{
			$this->load->database();

			$arr=array("ename"=>$this->input->post("txtename"),"desig"=>$this->input->post("txtedesig"),"salary"=>$this->input->post("txtesal"));

			$this->db->where("eid",$this->input->post("txteid"));
			$this->db->update("emp",$arr);
		}
	}

?>