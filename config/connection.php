<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_kampus");
if (mysqli_connect_errno()) {
    echo "Koneksi database error " . mysqli_connect_error();
};
