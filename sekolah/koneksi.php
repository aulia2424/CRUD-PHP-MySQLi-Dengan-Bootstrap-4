<?php

//deklasrasi variabel 
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "db_sekolah";    

// mengkoneksikan variable yang berisi data ke database
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// jika database terkoneksi maka muncul pesan Koneksi Berhasil!
// jika database gagal terkoneksi maka akan muncul pesan Koneksi Gagal!
if($connection) {
    echo "Koneksi Berhasil!";
} else {
    echo "Koneksi Gagal! : ". mysqli_connect_error();
}

?>