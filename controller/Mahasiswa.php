<?php

include "./model/Model_mahasiswa.php";

function IndexMahasiswa(){
    $data = ReadAllMahasiswa();
    return $data;
}

function InsertDataMhs($kode, $nama, $tempat_lahir, $tanggal_lahir, $email, $alamat, $nophon, $noktp){
    InsertDataMahasiswa($kode, $nama, $tempat_lahir, $tanggal_lahir, $email, $alamat, $nophon, $noktp);
    $validator = "Data Berhasil Ditambahkan";
    return $validator;
}