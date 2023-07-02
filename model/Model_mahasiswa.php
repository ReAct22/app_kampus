<?php

function ReadAllMahasiswa(){
    $koneksi = Koneksi();
    $sql = "SELECT *FROM tbl_mahasiswa";
    $result = mysqli_query($koneksi, $sql);
    if($result){
        return $result;
    } else {
        echo "Query Failed";
    };
}

function InsertDataMahasiswa($kode, $nama, $tempat_lahir, $tanggal_lahir, $email, $alamat, $nophon, $noktp){
    $koneksi = Koneksi();
    $sql = "INSERT INTO tbl_mahasiswa (id,nama,tempat_lahir,tanggal_lahir,email,alamat,nophon, noktp) VALUES('".$kode."','".$nama."', '".$tempat_lahir."','".$tanggal_lahir."','".$email."','".$alamat."','".$nophon."', '".$noktp."')";
    mysqli_query($koneksi, $sql);
}
