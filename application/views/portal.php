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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/style.css'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="container-fluid navbar navbar-expand-sm fixed-top" id="primary-nav">
        <div class="container">
        <a class="navbar-brand" id="logonav" href="#"><img src="<?php echo base_url('asset/logo.png'); ?>"></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="#header">Beranda</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#judsis">Informasi</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#alur">Alur</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo site_url('welcome/login'); ?>">Login</a>
            </li>
        </ul>
        </div>
    </nav>
    <div id="header" class="container-fluid">
        
    </div>
    <div class="container" id="sistemjud">
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
                <p>Dengan padatnya kegiatan dosen dan mahasiswa. UDINUS menyediakan peminjaman ruang kelas melalui website Sistem Peminjaman Ruang agar
                    mahasiswa dan dosen dapat mencari dan meminjam ruang kelas untuk mata kuliah pengganti lebih mudah.
                </p>
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
                    UKM dan Organisasi Mahasiswa membutuhkan Aula untuk mengadakan rencana kegiatan mereka. UDINUS juga menyediakan peminjaman untuk Aula di Gedung H.
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6">
                <h5>Peminjaman Gallery & Ruang Rapat</h5>
                <hr>
                <p>Peminjaman Gallery dan Ruang Rapat kini lebih mudah bagi UKM dan Organisasi Mahasiswa. Karena Sistem Peminjaman Ruang juga menyediakan peminjaman untuk Gallery dan Ruang Rapat.

                </p>
            </div>
            <div class="col-sm-6" id="laptop">
                <img src="<?php echo base_url('asset/table1.png');?>">
            </div>
        </div>
        <div class="row" id="alur">
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

<script>
	$(document).ready(function(){       
	 var scroll_start = 0;
   var startchange = $('#sistemjud');
    var offset = startchange.offset();
     if (startchange.length){
    $(document).scroll(function() { 
       scroll_start = $(this).scrollTop();
       if(scroll_start > offset.top) {
           $(".navbar").css('background-color', '#030629');
           $(".navbar img").attr('src','<?php echo base_url('asset/logo2.png'); ?>')
        } else {
           $('.navbar').css('background', 'transparent');
           $(".navbar img").attr('src','<?php echo base_url('asset/logo.png'); ?>')
        }
    });
     }
 });
 
 // add class to body for scroll spy to work
$("body").attr("data-spy", "scroll").attr("data-target", "#primary-nav")
// Activate srollspy
$("main").scrollspy({ target: "#primary-nav" })

// Smooth Scrolling for internal links
$('a[href^="#"]').on("click",function (e) {
	    e.preventDefault();

	    var target = this.hash;
	    var $target = $(target);

	    $("html, body").stop().animate({
	        "scrollTop": $target.offset().top
	    }, 900, 'swing', function () {
	        window.location.hash = target;
	    });
	});
</script>