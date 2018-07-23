<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Edit Peminjaman Ruangan</title>
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
            <li><a href="<?php echo site_url('welcome/beranda'); ?>">Beranda</a></li>
            <li><a href="<?php echo site_url('welcome/inputPeminjaman'); ?>">Input Peminjaman</a></li>
            <li> <?php echo $this->session->userdata("nim")?></li>
            <li><a href="<?php echo site_url('welcome/logout');?>">Logout</a></li>
        </ul>
        </div>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col s12">
                <h3>Form Edit Peminjaman Ruang Kelas</h3>
            </div>
        </div>
        <div class="row">
            <div class="col s6"id="picpinjam">
                <img src="<?php echo base_url('asset/Objects.png')?>" alt=>
            </div>
            <div class="col s6">
			<?php foreach($admin as $u){?>
			<?php echo form_open('admin/update')?>
                <input type="hidden" name="id" value="<?php echo $u->id_peminjaman?>">
                <div class="row input-field">
                    <label for="last_name">Nim</label>
                    <input id="last_name" type="text" class="validate" name ="nim" value="<?php echo $u->id_user ?>"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Nama mahasiswa</label>
                    <input id="last_name" type="text" class="validate" name="mahasiswa"  value="<?php echo $u->nama_peminjam?>"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Nama dosen</label>
                    <input id="last_name" type="text" class="validate" name="dosen"  value="<?php echo $u->nama_dosen?>"required>
				</div>
				<div class="row input-field">
                    <label for="last_name">Nama mata kuliah</label>
                    <input id="last_name" type="text" class="validate" name="makul"  value="<?php echo $u->nama_makul?>"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Tanggal</label>
                    <input type="text" class="datepicker" name ="tanggal" value="<?php echo $u->tanggal?>"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Jam</label>
                    <input id="last_name" type="text" class="validate" name="jam" placeholder="Ex : 07:00" value="<?php echo $u->jam?>"required>
                </div>
                <div class="row input-field">
                    <label for="last_name">Ruang Kelas</label>
                    <input id="last_name" type="text" class="validate" name="kelas" value="<?php echo $u->nama_ruangkelas?>"required>
                </div> 
                <div class="row input-field">
                    <button class="waves-effect waves-light btn" name="submit">Submit</button>
                </div>
            <?php echo form_close()?> 
			</div>
			<?php }?>
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