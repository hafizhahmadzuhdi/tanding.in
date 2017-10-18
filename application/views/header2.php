<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
  if(!$this->session->has_userdata('nama','status')) {
        redirect(base_url().'index.php/belajar/masuk');}
?>
<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Tanding.in</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/utama/assets/demo.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/utama/assets/header-login-signup.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>

</head>

<body>

<header class="header-login-signup">

    <div class="header-limiter">

        <h1><a href="<?php echo base_url() ?>index.php/player_login_cont/tolamanplayer">Tanding<span>in</span></a></h1>

        <nav>
            <a href="#">Home</a>
            <a href="#">Contact Us</a>
            <a href="#">About Us</a>
        </nav>

        <ul>
            <li><a href="<?php echo base_url() ?>/index.php/player_login_cont/logout">Logout</a></li>

        </ul>

    </div>

</header>
