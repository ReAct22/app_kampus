<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah Data Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/app_kampus">Home</a></li>
                    <li class="breadcrumb-item"><a href="?page=mahasiswa">Mahasiswa</a></li>
                    <li class="breadcrumb-item active">Tambah Data</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<div class="container-fluid">
    <div class="card">
        <div class="card-body">
            <form action="" method="post">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="kode" class="form-control" id="" placeholder="Kode Mahasiswa">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control" id="" placeholder="Nama Mahasiswa">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" name="tempat_lahir" class="form-control" id="" placeholder="Tempat Lahir">
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <input type="date" name="tanggal_lahir" class="form-control" id="" placeholder="Tanggal Lahir">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="email" name="email" id="" class="form-control" placeholder="example@email.com">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control" placeholder="Alamat"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="tel" name="nophon" class="form-control" placeholder="08123456789">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <input type="text" class="form-control" name="noktp" placeholder="123456890">
                        </div>
                    </div>
                </div>
                <br>
                <input type="submit" value="Save" name="submit" class="btn btn-sm btn-success">
            </form>
            <?php
            $kode = @$_POST['kode'];
            $nama = @$_POST['nama'];
            $tempat_lahir = @$_POST['tempat_lahir'];
            $tanggal_lahir = @$_POST['tanggal_lahir'];
            $email = @$_POST['email'];
            $alamat = @$_POST['alamat'];
            $nophon = @$_POST['nophon'];
            $noktp = @$_POST['noktp'];
            $submit = @$_POST['submit'];
            if($submit){
                if($kode == "" || $nama == "" || $tempat_lahir == "" || $tanggal_lahir == "" || $email == "" || $alamat == "" || $nophon == "" || $noktp == ""){
                    ?>
                    <script>
                        alert("Data Tidak bole ada yang kosong !!!");
                    </script>
                    <?php
                } else {
                    $validator = InsertDataMhs($kode, $nama, $tempat_lahir, $tanggal_lahir, $email, $alamat, $nophon, $noktp);
                    ?>
                    <script>
                        if(<?php $validator ?>){
                            alert(<?php $validator ?>);
                            setTimeout(300);
                            window.location.href="?page=mahasiswa";
                        } else {
                            alert("Ada kesalahan Saat Penginputan")
                        }
                    </script>
                    <?php
                }
            }
            ?>
        </div>
    </div>
</div>