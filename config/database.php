<?php 
$conn = mysqli_connect('localhost', 'root', '', 'tracker_anim');
if (!$conn) {
    die ("Koneksi Gagal!" . mysqli_connect_error());
}

?>