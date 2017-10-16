<body>
<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi';?>" method="post">
  <fieldset>
    <legend>Personal information:</legend>
    Full name:<br>
    <input type="text" name="fullname"><br>
    Birthdate :<br>
    <input type="date" name="birthdate" ><br>
    Username :<br>
    <input type="text" name="username"><br>
    Email :<br>
    <input type="email" name="email"><br>
    Password :<br>
    <input type="password" name="password"><br><br>
    <input type="submit" value="Submit">
  </fieldset>
</body>