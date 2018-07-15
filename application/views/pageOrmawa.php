<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
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
        <a href="#" class="brand-logo logonav"><img src="<?php echo base_url('asset/logo.png'); ?>"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo site_url('welcome/beranda'); ?>">Beranda</a></li>
            <li><a href="<?php echo site_url('welcome/orma'); ?>">Input Peminjaman</a></li>
            <li><a href="collapsible.html">Logout</a></li>
        </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3>Peminjaman Ruang Kelas</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s6" id="picpinjam">
                <img src="<?php echo base_url('asset/Objects.png'); ?>">
            </div>
            <div class="col s6">
                <?php /*echo form_open('')*/?>
                <div class="row input-field">
                    <label for="last_name">Nama</label>
                    <input id="last_name" type="text" class="validate" required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Nama Dosen</label>
                    <input id="last_name" type="text" class="validate" required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Mata Kuliah</label>
                    <input id="last_name" type="text" class="validate" required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Tanggal</label>
                    <input type="text" class="datepicker" required>
                </div>
                
                <?php /*echo form_close()*/?>
                <div class="row">
                <a class="waves-effect waves-light btn" href="<?php echo site_url('welcome/ruang'); ?>">H.3</a>
                <a class="waves-effect waves-light btn">H.4</a>
                <a class="waves-effect waves-light btn">H.5</a>
                <a class="waves-effect waves-light btn">H.6</a>
                <a class="waves-effect waves-light btn">H.7</a>
                </div>
            </div>
        </div>
        
    </div>
</body>
</html>

<script>
    $(document).ready(function(){
    $('.datepicker').datepicker();
  });
</script>