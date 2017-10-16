<!DOCTYPE html>
<html>
<head>
	<title>Menghubungkan codeigniter dengan database mysql</title>
</head>
<body>
	<h1>Mengenal Model Pada Codeigniter | MalasNgoding.com</h1>
	<table border="1">
		<tr>
			<th>Player ID</th>
			<th>Full name</th>
			<th>Birthdate</th>
			<th>Player Username</th>
			<th>Player Email</th>
			<th>Password</th>
		</tr>
		<?php foreach($player as $u){ ?>
		<tr>
			<td><?php echo $u->player_id ?></td>
			<td><?php echo $u->player_name ?></td>
			<td><?php echo $u->player_bd ?></td>
			<td><?php echo $u->player_usrname ?></td>
			<td><?php echo $u->player_email ?></td>
			<td><?php echo $u->player_password ?></td>
		</tr>
		<?php } ?>
	</table>
</body>
</html>