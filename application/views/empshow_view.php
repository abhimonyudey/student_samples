<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table width="300px" border="2px">
		<tr>
			<th>ID</th>
			<th>NAME</th>
			<th>DESIGNATION</th>
			<th>SALARY</th>
		</tr>
		<?php

			foreach($r as $d)
			{
		?>
				<tr>
					<td><?php echo $d->eid; ?></td>
					<td><?php echo $d->ename; ?></td>
					<td><?php echo $d->desig; ?></td>
					<td><?php echo $d->salary; ?></td>
				</tr>
		<?php

			}

	?>

	</table>
	
</body>
</html>