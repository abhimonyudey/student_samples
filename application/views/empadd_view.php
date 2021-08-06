<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/emp_controller/empadd" method="post">
		ID:
		<input type="text" name="txteid">
		<br>
		Name:
		<input type="text" name="txtename">
		<br>
		Designation:
		<input type="text" name="txtedesig">
		<br>
		Salary:
		<input type="text" name="txtesal">
		<br>
		<input type="submit" value="ADD">
	</form>
	<a href="<?php echo base_url(); ?>index.php/emp_controller/empshowall">SHOW ALL</a>
	<br>
	<a href="<?php echo base_url(); ?>index.php/emp_controller/empsearch">UPDATE</a>
</body>
</html>