<?php
	class sum_model extends CI_Model
	{
		function do_sum()
		{
			$a=$this->input->post("t1");
			$b=$this->input->post("t2");
			$c=$a+$b;
			return $c;
		}
	}

?>