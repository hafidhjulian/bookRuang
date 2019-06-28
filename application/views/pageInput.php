<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Peminjaman Ruangan</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pageOrmawa.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
</head>
<body>
    <img class="bg" color:"white">
    <nav class="navOrma">
        <div class="nav-wrapper container">
        <a href="<?php echo site_url('welcome/beranda')?>" class="brand-logo logonav"><img src="<?php echo base_url('asset/logo.png'); ?>"></a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="<?php echo site_url('welcome/beranda'); ?>">Beranda</a></li>
            <li><a href="<?php echo site_url('welcome/lihat');?>">Lihat Peminjaman</a></li>
            <li><a href="<?php echo site_url('welcome/inputPeminjaman'); ?>">Input Peminjaman</a></li>
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
            <div class="col s12" id="picpinjam">
                <?php?>
                <!-- <div class="row input-field">
                    <label for="last_name">Nama</label>
                    <input id="last_name" type="text" class="validate" name ="nama"required>
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
                </div> -->
                <!-- <div class="row input-field">
                    <button class="waves-effect waves-light btn" name="submit">Submit</button>
                </div> -->
                <a class="waves-effect waves-light btn modal-trigger right" href="<?php echo site_url('welcome/pesan')?>">Pesan</a><br><br>
                <div class="row">
                
                <ul class="tabs tabs-fixed-width tab-demo z-depth-1 light-blue darken-4">
                    <li class="tab" ><a class="active" href="#test1">H.3</a></li>
                    <li class="tab"><a href="#test2">H.4</a></li>
                    <li class="tab"><a href="#test3">H.5</a></li>
                    <li class="tab"><a href="#test4">H.6</a></li>
                    <li class="tab"><a href="#test5">H.7</a></li>
                </ul>
                <div id="test1" class="col s12">
                    <div class="center">
                    <h4>Jadwal Pemakaian Ruang H.3</h4>
                    </div>
                    <br><br>
                    <table class="table-responsive">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Hari</th>
                                <th>Ruangan</th>
                                <th>Nama Jadwal</th>
                                <th>Jam Mulai</th>
                                <th>Jam Selesai</th>
                                <th>Nama Dosen</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            $no = 1;
                            foreach($peminjaman as $u){ 
                        ?>
                            <tr>
                                <td><?php echo $no++;?></td>
                                <td><?php echo $u->hari ?></td>
                                <td><?php echo $u->nama_ruang ?></td>
                                <td><?php echo $u->nama_jadwal ?></td>
                                <td><?php echo $u->jam_mulai ?></td>
                                <td><?php echo $u->jam_selesai ?></td>
                                <td><?php echo $u->nama_dosen ?></td>
                            </tr>
                        </tbody>
                        <?php } ?>
                    </table>
                </div>
                <div id="test2" class="col s12">
                    <div class="center">
                    <h4>Jadwal Pemakaian Ruang H.4</h4>
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
                <div id="test3" class="col s12">
                    <div class="center">
                    <h4>Jadwal Pemakaian Ruang H.5</h4>
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
                <div id="test4" class="col s12">
                    <div class="center">
                    <h4>Jadwal Pemakaian Ruang H.6</h4>
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
                <div id="test5" class="col s12">
                <div class="center">
                    <h4>Jadwal Pemakaian Ruang H.7</h4>
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

  $(document).ready(function(){
    $('.modal').modal();
  });

  $(document).ready(function(){
    $('.tabs').tabs();
  });

</script>