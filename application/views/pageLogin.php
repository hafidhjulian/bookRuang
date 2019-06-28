<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Halaman Login</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('css/pageLogin.css'); ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
</head>
<body>
<br>
<br><br><br><br>
    <div class="container">
    <div class="row center-align">
        <div class="col s12 m4 l2"></div>
        <div class="col s12 m4 l8">
            <div class="card center" id="loginreg">
                <div class="card-image center-align">
                    <div class="row">
                        <div class="col s12 center">
                        <img class="center" src="<?php echo base_url('asset/logo2.png'); ?>">
                        </div>
                    </div>
                </div>
                <div class="card-content">
                    <div id="login">
                        <div class="row">
                            <div class="col s12">
                                <?php echo form_open('welcome/ceklogin')?>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="username">NIM*</label>
                                        <input type="text" name="nim" class="validate" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <label for="password">Password*</label>
                                        <input type="password" name="password" class="validate" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="input-field col s12">
                                        <a class="waves-effect waves-light btn indigo darken-4"><input type="submit" value="submit" name="submit"></a>
                                    </div>
                                </div>
                                <?php echo form_close()?>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
        <div class="col s12 m4 l2"></div>
    </div>
    </div>
</body>
</html>