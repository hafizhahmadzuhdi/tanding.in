<body>
	
	<div class="kolom">
		<div id="kiri">
	<form action="<?php echo base_url('/index.php/player_login_cont/aksi_login'); ?>" method="post">	
		<h1> Login as Player </h1>
		<table>
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
</div>
		<!--login Vendor-->
		<div id="kanan">
				<form action="<?php echo base_url('/index.php/player_login_cont/aksi_login_vendor'); ?>" method="post"><!--belum diubah-->	
		<h1> Login as Vendor </h1>
		<table>
			<tr>
				<td>Vendor Username</td>
				<td><input type="text" name="vendorusername"></td>
			</tr>
			<tr>
				<td>Vendor Password</td>
				<td><input type="password" name="vendorpassword"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="Login"></td>
			</tr>
		</table>
	</form>
	</div>
</div>
</body>
</html>