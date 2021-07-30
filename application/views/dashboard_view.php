<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h1>hii 
		<?php 
		echo $this->session->userdata("un"); 
		// userdata() used for show the session data
		?>
	Welcome to dashboard</h1>
	<a href="<?php echo base_url(); ?>index.php/login_controller/logout">Log-out</a>
</body>
</html>