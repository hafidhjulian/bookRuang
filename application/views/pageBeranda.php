<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Beranda</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pageOrmawa.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</head>
<body>
    <nav class="navOrma">
        <div class="nav-wrapper container">
        <a href="<?php echo site_url('welcome/beranda')?>" class="brand-logo logonav"><img src="<?php echo base_url('asset/logo.png'); ?>"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo site_url('welcome/beranda'); ?>">Beranda</a></li>
            <li><a href="<?php echo site_url('welcome/orma'); ?>">Input Peminjaman</a></li>
            <li><?php echo $this->session->userdata("nim")?></li>
            <li><a href="<?php echo site_url('welcome/logout')?>">Logout</a></li>
        </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col s12 center">
                <h2>Riwayat Peminjaman</h2>
            </div>
        </div>
        <div class="row">
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal</th>
                        <th>Ruangan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
