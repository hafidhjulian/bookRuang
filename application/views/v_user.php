<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tampilan User</title>
</head>
<body>
    <h1>Login Berhasil</h1>
    <h2>Hai, <?php echo $this->session->userdata('username');?></h2>
    <a href="<?php echo base_url().'index.php/login/logout'?>">Logout</a>
</body>
</html>