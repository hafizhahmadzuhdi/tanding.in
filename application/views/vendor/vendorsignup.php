<body>
<form action="<?php echo base_url(). 'index.php/crud/tambah_aksi_vendor';?>" method="post">
  <fieldset>
    <legend>Personal information for Vendor:</legend>
    Field name:<br>
    <input type="text" name="field_name"><br>
    Vendor Fullname :<br>
    <input type="text" name="vendor_fullname" ><br>
    Vendor KTP :<br>
    <input type="text" name="vendor_ktp"><br>
    Vendor Username :<br>
    <input type="text" name="vendor_usrname"><br>
    Vendor Password :<br>   
    <input type="password" name="vendor_password"><br>
    Field Address :<br>
    <input type="text" name="field_address"><br>
    Field Capacity :<br>
    <input type="text" name="field_capacity"><br>
    Field Price :<br>
    <input type="text" name="field_price"><br>
    Nomor Rekening :<br>
    <input type="text" name="vendor_norek"><br>
    <input type="submit" value="Submit">
  </fieldset>
</body>