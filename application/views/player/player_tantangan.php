<body><?php
$this->load->library('form_validation');?>
<?php echo form_open('belajar/formvalidasi_tantangan'); ?>
<form action="<?php echo base_url(). 'index.php/belajar/tambah_tantangan';?>" method="post">
  <fieldset>
    <legend>Post Challenge Your Futsal Team:</legend>
    Team Name:<br>
    <input type="text" name="team_name"><?php echo form_error('team_name'); ?><br>
    Input Formed Player ID :<br>
    <input type="text" name="player_id" value="2" readonly><?php echo form_error('player_id'); ?><br>
    Average Age :<br>
    <input type="text" name="average_age"><?php echo form_error('average_age'); ?><br>
    Date :<br>
    <input type="date" name="date"><?php echo form_error('date'); ?><br>
    Time :<br>
    <input type="time" name="time"><?php echo form_error('time'); ?><br>
    Duration :<br>
    <input type="number" name="duration"> hours <?php echo form_error('duration'); ?><br>
    Field :<br>
    <input type="text" name="field"><?php echo form_error('field'); ?><br>
    Notes :<br>
    <input type="text" name="notes"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
</body>