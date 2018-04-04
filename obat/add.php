<?php
require_once('../_header.php');

    // use Ramsey\Uuid\Uuid;
    // use Ramsey\Uuid\Exception\UnsatisfiedDependencyException;
    // $uuid4 = Uuid::uuid4();
    // echo $uuid4->toString();
    
?>

<div class="box">
    <h1>Obat</h1>
    <h4>
        <small>Tambah Data Obat</small>
        <div class="pull-right">
            <a href="data.php" class"btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i>Kembali</a>
        </div>
    </h4>
</div>
<div class="row">
    <div class="col-lg-6 col-lg-offset-3">
        <form action="proses.php" method="post">
            <div class="form-group">
                <label for="nama">Nama Obat</label>
                <input type="text" name="nama" id="nama" class="form-control" required autofocus> 
            </div>
            <div class="form-group">
                <label for="ket">Keterangan Obat</label>
                <textarea name="ket" id="nama" class="form-control" required></textarea> 
            </div>
            <div class="form-group pull-right" >
                <input type="submit" name="add" value="Simpan" class="btn btn-success">    
            </div>
        </form>
    </div>
</div>

<?php require_once('../_footer.php'); ?>