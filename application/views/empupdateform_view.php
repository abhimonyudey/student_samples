<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php

			foreach($r as $d)
			{
		?>
		<form action="<?php echo base_url(); ?>index.php/emp_controller/empupdate" method="post">		
ID: <input type="text" readonly name="txteid" value="<?php echo $d->eid; ?>"><br>
NAME: <input type="text" name="txtename" value="<?php echo $d->ename; ?>"><br>
DESIGNATION: <input type="text" name="txtedesig" value="<?php echo $d->desig; ?>"><br>
SALARY: <input type="text" name="txtesal" value="<?php echo $d->salary; ?>"><br>
		<input type="submit" value="UPDATE">
		</form>		
		<?php

			}

	?>
</body>
</html>