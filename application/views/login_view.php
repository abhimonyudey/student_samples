<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo base_url(); ?>index.php/login_controller/login" method="post">
		USERNAME:
		<input type="text" name="txtuser">
		<br>
		PASSWORD:
		<input type="password" name="txtpass">
		<br>
		<input type="submit" value="LOGIN">
	</form>
</body>
</html>