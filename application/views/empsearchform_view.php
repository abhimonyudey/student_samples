<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/emp_controller/empsearcher" method="post">
		Employee ID:
		<input type="text" name="txteid">
		<input type="submit" value="Search">
	</form>
</body>
</html>