<!DOCTYPE html>
<html>
<head>
    <title>Tanding.in/cari lawan</title>
    <link href="<?php echo base_url()?>assets/css/cari_lawan.css" type="text/css" rel="stylesheet">
</head>
</head>
<body>
   
<div id="pricing-table" class="clear">
    <?php 
        foreach($pertandingan as $p){ 
    ?>
    <div class="plan">
        <h3><?php echo $p->team_name ?><span>(logo)</span></h3>
        <a class="signup" href="">Lawan</a>         
        <ul>
            <li><b>Player ID : </b><?php echo $p->player_id ?></li>
            <li><b>Average Age : </b><?php echo $p->average_age ?></li>
            <li><b>Date : </b><?php echo $p->date ?></li>
			<li><b>Time : </b><?php echo $p->time ?></li>	
            <li><b>Duration : </b><?php echo $p->duration ?></li> 
            <li><b>Field : </b><?php echo $p->field ?></li> 
            <li><b>Notes : </b><?php echo $p->notes ?></li>		
        </ul> 
    </div>
    <?php } ?>
</div>
</body>
</html>