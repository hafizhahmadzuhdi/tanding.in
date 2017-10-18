<body>
<?php 
$this->load->library('form_validation');?>
<?php echo form_open('belajar/formvalidasi_player'); ?>
<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi';?>" method="post">

    <legend>Personal information:</legend>
    Full name:<br>
    <input type="text" name="fullname"><?php echo form_error('fullname'); ?><br>
    Birthdate :<br>
    <input type="date" name="birthdate" ><?php echo form_error('birthdate'); ?><br>
    Username :<br>
    <input type="text" name="username"><?php echo form_error('username'); ?><br>
    Email :<br>
    <input type="email" name="email"><?php echo form_error('email'); ?><br>
    Password :<br>
    <input type="password" name="password"><?php echo form_error('password'); ?><br><br>
    <input type="submit" value="Submit">
  </fieldset>
</body>