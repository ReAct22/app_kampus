CREATE DATABASE db_mahasiswa

use db_mahasiswa

create TABLE tbl_mahasiswa(
id VARCHAR(255) PRIMARY KEY,
nama varchar(255),
tempat_lahir varchar(255),
tanggal_lahir DATE,
email varchar(255),
alamat TEXT,
nohp VARCHAR(255),
noktp varchar(255)
)

CREATE TABLE tbl_usermhs(
id varchar(255) PRIMARY KEY,
id_mhs varchar(255),
email varchar(255),
password varchar(255)
)

create TABLE tbl_matkul(
id varchar(255) PRIMARY KEY,
matkul varchar(255)
)

create table tbl_matkulmhs(
id varchar(255) PRIMARY KEY,
id_mhs varchar(255),
nama_mhs varchar(255),
id_matkul varchar(255),
matkul varchar(255)
)