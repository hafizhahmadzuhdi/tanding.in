<!DOCTYPE html>
<html>
<head>
	<title>Membuat Tandingin | www.malasngoding.com</title>
</head>
<body>
	<h1>Login berhasil !</h1>
	<h2>Hai, Selamat Datang<?php echo $this->session->userdata("nama"); ?></h2>
	<a href=#>Cari Lawan</a>
	<a href=#>Post Tantangan</a>
	<a href=#>Booking Lapangan</a>


	<a href="<?php echo base_url() ?>/index.php/player_login_cont/logout">Logout</a>
	</div>
</body>
</html>