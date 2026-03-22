<?php 

require '../config/database.php';
require '../functions/registrasi.php';

if(isset($_POST["tombol"]) ) {

 if( registrasi($_POST) > 0) {
    echo "<script> 
            alert('User Berhasil Di Daftarkan!');
         </script>";
 } else
    global $conn;
    echo mysqli_error($conn);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/form.css">
</head>
<body>
    <div class="formulir">
        <div class="judul">
            <h1>Register</h1>
            <hr>
        </div>
        <form action="" method="post" name="formulir">
            <label for="username">Username :</label>
            <input type="text" name="username" id="username" class="username" placeholder="Masukan Username" autocomplete="off">
            <br>
            <label for="email">Email :</label>
            <input type="text" name="email" id="email" class="email" placeholder="Masukan Email" autocomplete="off">
            <br>
            <label for="password">Password :</label>
            <input type="password" name="password" id="password" class="password" placeholder="Masukan Password" autocomplete="off">
            <button type="submit" name="tombol">Daftar</button>
        </form>
    </div>
</body>
</html>

