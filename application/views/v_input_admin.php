<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Peminjaman Ruangan</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pagePinjam.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</head>
<body>
    <nav class="navOrma">
        <div class="nav-wrapper container">
        <a href="<?php echo site_url('welcome/beranda')?>" class="brand-logo logonav"><img src="<?php echo base_url('asset/logo.png'); ?>"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li> <?php echo $this->session->userdata("nim")?></li>
            <li><a href="<?php echo site_url('welcome/logout');?>">Logout</a></li>
        </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3>Form Peminjaman Ruang Kelas</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s6"id="picpinjam">
                <img src="<?php echo base_url('asset/Objects.png')?>" alt=>
            </div>
            <div class="col s6">
                <?php echo form_open('admin/proses_tambah')?>
                <div class="row input-field">
                    <label for="last_name">NIM</label>
                    <input id="last_name" type="text" class="validate" name ="nim"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Nama</label>
                    <input id="last_name" type="text" class="validate" name ="mahasiswa"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Nama Dosen</label>
                    <input id="last_name" type="text" class="validate" name="dosen"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Mata Kuliah</label>
                    <input id="last_name" type="text" class="validate" name="makul"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Tanggal</label>
                    <input type="text" class="datepicker" name ="tanggal"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Jam</label>
                    <input id="last_name" type="text" class="validate" name="jam" placeholder="Ex : 07:00"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Ruang Kelas</label>
                    <input id="last_name" type="text" class="validate" name="kelas"required>
                </div> 
                <div class="row input-field">
                    <button class="waves-effect waves-light btn" name="submit">Submit</button>
                </div>
            <?php echo form_close()?> 
            </div>
        </div>
        
    </div>
    
</body>
</html>

<script>
    $(document).ready(function(){
    $('.datepicker').datepicker();
  });

  $(document).ready(function(){
    $('.modal').modal();
  });

  $(document).ready(function(){
    $('.tabs').tabs();
  });

</script>