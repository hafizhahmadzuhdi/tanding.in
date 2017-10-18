<!DOCTYPE html>
<html>
<head>
	<title>Tanding.in</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <link href="<?php echo base_url()?>assets/css/loggedin.css" type="text/css" rel="stylesheet">
</head>
<body>

	<marquee><h2>Hai, Selamat Datang <?php echo $this->session->userdata("nama"); ?></h2></marquee>
	<div class="menu-bar">
	<div class='wrapper'>
		<a href="<?php echo base_url() ?>index.php/belajar/pertandingan">
			<img src="<?php echo base_url()?>assets/img/choose_opponent.png"/ width="150" height="150">
		</a>
	<div class='description'>
		<p class='description_content'>Cari Lawan</p>
		<!-- end description content -->
	</div>
	<!-- end description div -->
	</div>
	<div class='wrapper'>
		<a href="<?php echo base_url() ?>index.php/belajar/post_tantangan">
			<img src="<?php echo base_url()?>assets/img/post_challange.png"/ width="150" height="150">
		</a>
	<div class='description'>
		<p class='description_content'>Post Tantangan</p>
		<!-- end description content -->
	</div>
	<!-- end description div -->
	</div>
	<div class='wrapper' id='booking_lapangan'>
		<a href=#>
			<img src="<?php echo base_url()?>assets/img/Vendor.png"/ width="150" height="150">
		</a>
	<div class='description'>
		<p class='description_content'>Booking Lapangan</p>
		<!-- end description content -->
	</div>
	<!-- end description div -->
	</div>	


</body>


</html>