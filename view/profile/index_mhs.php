<!-- Content Header (Page header) -->
<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Mahasiswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/app_kampus">Home</a></li>
                    <li class="breadcrumb-item active">Mahasiswa</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<!-- Content -->
<div class="container">
    <section>
        <!-- <div class="col-s"></div> -->
        <a href="?page=addmahasiswa" class="btn btn-sm btn-success">Save</a>
        <br>
        <br>
        <table id="example2" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAMA</th>
                    <th>EMAIL</th>
                    <th>OPTION</th>
                </tr>
            </thead>
            <tbody>
                <?php $data = IndexMahasiswa(); ?>
                <?php $cek = mysqli_num_rows($data); ?>
                <?php if($cek < 1){ ?>
                    <tr>
                        <td style="text-align: center;" colspan="4">Data Tidak ada</td>
                    </tr>
                <?php } else { ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </section>
</div>