<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Input Data Daerah</strong></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">Input Data Daerah</div>
            <div class="panel-body">
                <div class="row">

                    <form method="post" role="form" action="">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Nama Daerah</label>
                                <input class="form-control" placeholder="Nama Daerah" name="nama_daerah" required>
                            </div>

                            <div>
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="margin-top: 15px;">
                            </div>
                        </div>
                        <!-- /.col-lg-6 (nested) -->
                    </form>

                </div>
                <!-- /.row (nested) -->
            </div>
            <!-- /.panel-body -->
        </div>
        <!-- /.panel -->
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->

<?php

$nama_daerah = @$_POST['nama_daerah'];

$simpan = @$_POST['simpan'];

if ($simpan) {

    $sql = $koneksi->query("INSERT INTO tb_daerah (nama_daerah) VALUES ('$nama_daerah')");

    if ($sql) {
?>

        <script type="text/javascript">
            alert("Data Berhasil disimpan")
            window.location.href = "?page=daerah";
        </script>

<?php
    }
}

?>