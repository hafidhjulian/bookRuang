<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Peminjaman</title>
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
            <li><a href="<?php echo site_url('welcome/beranda')?>">Beranda</a></li>
            <li><a href="<?php echo site_url('welcome/inputPeminjaman');?>">Input Peminjaman</a></li>
            <li> <?php echo $this->session->userdata("nim")?></li>
            <li><a href="<?php echo site_url('welcome/logout');?>">Logout</a></li>
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
                <div class="row center">
                
                <input type="hidden" name="username" value="<?php echo $this->session->userdata('username')?>">
                <a class="waves-effect waves-light btn modal-trigger" href="#modal1">H.3.1</a>
                <a class="waves-effect waves-light btn">H.3.2</a>
                <a class="waves-effect waves-light btn">H.3.3</a>
                <a class="waves-effect waves-light btn">H.3.4</a>
                </div>
                <div class="row center">
                <a class="waves-effect waves-light btn">H.3.5</a>
                <a class="waves-effect waves-light btn">H.3.6</a>
                <a class="waves-effect waves-light btn">H.3.7</a>
                <a class="waves-effect waves-light btn">H.3.8</a>
                </div>
                <div class="row center">
                <a class="waves-effect waves-light btn">H.3.9</a>
                <a class="waves-effect waves-light btn">H.3.10</a>
                <a class="waves-effect waves-light btn">H.3.11</a>
                <a class="waves-effect waves-light btn">H.3.12</a>
                </div>
            </div>
        </div>
    </div>

    <!-- modal jadwal -->
    <div id="modal1" class="modal">
        <div class="modal-content">
            <div class="center">
            <h4>Jadwal Pemakaian Ruang H.3.1</h4>
            <p>A bunch of text</p>
            </div>
            <br><br>
            <table class="table-responsive">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Hari</th>
                        <th>Nama Jadwal</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Nama Dosen</th>
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
        <div class="modal-footer">
            <a href="#!" class="modal-close waves-effect waves-green btn-flat">Close</a>
        </div>
    </div>
</body>
</html>

<script>
     $(document).ready(function(){
    $('.modal').modal();
  });
</script>