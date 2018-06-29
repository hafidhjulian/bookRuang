<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
</head>
<body>
    <h1>Menu Login Codeigniter</h1>
    <form action="<?php echo base_url().'index.php/login/aksi_login'?>" method="post">
        <table>
            <tr>
                <td>NIM</td>
                <td>
                    <input type="text" name="nim">
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="login"></td>
            </tr>
        </table>
    </form>
</body>
</html>