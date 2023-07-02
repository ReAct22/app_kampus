<?php
function Koneksi()
{
    $koneksi = mysqli_connect("localhost", "root", "", "db_mahasiswa");
    if (mysqli_connect_errno()) {
        echo "Koneksi database error " . mysqli_connect_error();
    }
    return $koneksi;
}
