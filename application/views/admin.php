<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Halaman Beranda Admin</title>
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
            <li>Halo <?php echo $this->session->userdata("nim")?></li>
            <li><a href="<?php echo site_url('welcome/logout')?>">Logout</a></li>
        </ul>
        </div>
    </nav>
	<div class="container">
		<br>
		<div class="row">
			<div class="col s12">
			<a class="waves-effect waves-light btn right" href="<?php echo site_url("admin/tambah")?>">Tambah</a>
			</div>
		</div>
		<div class="row">
			<div class="col s12">
				<table class="table-responsive">
					<thead>
						<tr>
							<th>No</th>
							<th>NIM</th>
							<th>Nama Peminjam</th>
							<th>Nama Dosen</th>
							<th>Nama Mata Kuliah</th>
							<th>Tanggal</th>
							<th>Jam</th>
							<th>Ruang Kelas</th>
							<th>Aksi</th>
						</tr>
					</thead>
					<tbody>
					<?php $no= 1;
					foreach($admin_peminjaman as $admin){?>
						<tr>
							<td><?php echo $no++?></td>
							<td><?php echo $admin->id_user?></td>
							<td><?php echo $admin->nama_peminjam?></td>
							<td><?php echo $admin->nama_dosen?></td>
							<td><?php echo $admin->nama_makul?></td>
							<td><?php echo $admin->tanggal?></td>
							<td><?php echo $admin->jam?></td>
							<td><?php echo $admin->nama_ruangkelas?></td>
							<td>
								<?php echo anchor('admin/edit/'.$admin->id_peminjaman,'Edit | '); ?>
								<?php echo anchor('admin/hapus/'.$admin->id_peminjaman,'Hapus'); ?>
							</td>
						</tr>
					</tbody>
					<?php }?>
				</table>
			</div>
		</div>
	</div>
</body>
</html>