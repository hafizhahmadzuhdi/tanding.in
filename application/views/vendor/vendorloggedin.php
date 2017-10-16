<!DOCTYPE html>
<html>
<head>
	<title>Membuat Tandingin | www.malasngoding.com</title>
</head>
<body>
	<h1>Selamat Datang Vendor !</h1>
	<h2>Hai, <?php echo $this->session->userdata("nama"); ?></h2>
	<a href="<?php echo base_url() ?>/index.php/player_login_cont/logout">Logout</a>
</body>
</html>