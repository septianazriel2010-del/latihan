<?php 
require '../config/database.php';

function registrasi($data) {
    global $conn;

    $nama = strtolower(stripslashes($data["username"]));
    $email = $data["email"];
    $password = mysqli_real_escape_string($conn, $data["password"]);
    
    //cek username
   $result = mysqli_query($conn, "SELECT nama FROM users WHERE nama = '$nama'"); 

    if (mysqli_num_rows($result)) {
        echo "<script>
                alert('username sudah terdaftar!')
             </script>";
             return false;

    }

    //enkripsi pw
    $password = password_hash($password, PASSWORD_DEFAULT);

    //tambahkan data ke dbms
    mysqli_query($conn, "INSERT INTO users (nama, email, password) 
                VALUES('$nama', '$email', '$password')");

    return mysqli_affected_rows($conn);

}

?>