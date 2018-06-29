<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Booking Ruang</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css') ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="container navbar navbar-expand-sm bg-transparent fixed-top">
        <a class="navbar-brand" id="logonav" href="#"><img src="<?php echo base_url('asset/logo.png')?>"></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Informasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Alur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url().'index.php/login'?>">Login</a>
            </li>
        </ul>
    </nav>
    <div id="header" class="container-fluid">
        <a href="#">
            <button type="button" class="btn btn-light">Pesan</button>
        </a>
    </div>
    <div class="container">
        <div class="row" id="judsis">
            <div class="col-sm-12 text-center">
                <h1>Sistem Peminjaman Ruang</h1>
            </div>
        </div>
        <br>
        <br><br>
        <div class="row">
            <div class="col-sm-6">
                <h5>Peminjaman Ruang Kelas</h5>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ut explicabo eveniet non molestias saepe placeat autem nisi, 
                    iste ab necessitatibus itaque natus dolorem alias perferendis, soluta vitae labore inventore.</p>
            </div>
            <div class="col-sm-6" id="laptop">
                <img src="<?php echo base_url('asset/laptop.png');?>">
            </div>
        </div>
        <br><br><br>
        <div class="row">
            <div class="col-sm-6" id="hape">
                <img src="<?php echo base_url('asset/hp.png');?>">
            </div>
            <div class="col-sm-6">
                <h5>Peminjaman Aula</h5>
                <hr>
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                    Mollitia ut architecto quos assumenda debitis nesciunt qui neque perspiciatis praesentium reprehenderit in nam accusamus consectetur cupiditate dolore esse ad, 
                    consequuntur hic!
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5>Peminjaman Galery & Ruang Rapat</h5>
                <hr>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat, ut explicabo eveniet non molestias saepe placeat autem nisi, 
                    iste ab necessitatibus itaque natus dolorem alias perferendis, soluta vitae labore inventore.</p>
            </div>
            <div class="col-sm-6" id="laptop">
                <img src="<?php echo base_url('asset/table1.png');?>">
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center">
                <h1>Alur Pemesanan Ruang</h1>
            </div>
        </div>
            <br><br>
        <div class="row">
            <div class="col-sm-12" id="alur">
                <img src="<?php echo base_url('asset/Table.png');?>">
            </div>
        </div>
    </div>
    <br>
    <br><br><br>
    <div class="container-fluid" id="foot">
        <div class="container">
        <div class="row" id="foter2">
            <div class="col-sm-1" id="logodinus">
                <img src="<?php echo base_url('asset/logoUdinus2.png');?>" class="rounded-circle">
            </div>
            <div class="col-sm-6" id="desfot">
                <h4><strong>Universitas Dian Nuswantoro</strong></h4>
                <p id="foot1">Main Campus : 207 Imam Bonjol Street || (+6224) 3517261</p>
                <p id="foot2">Other Campus : 5-11 Nakula I Street || (+6224) 3520165</p>
                <p id="foot3">Fax. (+6224) 3569684 || Semarang 50131 Indonesia</p>
            </div>
            <div class="col-sm-4 text-center mx-auto" id="kontakfot">
                <h3>Contact Us</h3>
                <div class="col">
                    <img src="<?php echo base_url('asset/fb.png');?>">
                    <img src="<?php echo base_url('asset/twitter.png');?>">
                    <img src="<?php echo base_url('asset/IG.png');?>">
                    <img src="<?php echo base_url('asset/G+.png');?>">
                </div>
            </div>
        </div>
        </div>
    </div>
</body>
</html>