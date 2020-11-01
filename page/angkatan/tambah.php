<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Input Data Angkatan</strong></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">Input Data Angkatan</div>
            <div class="panel-body">
                <div class="row">

                    <form method="post" role="form" action="">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Angkatan</label>
                                <input class="form-control" type="number" placeholder="Angkatan Ke-" name="angkatan_ke" required>
                            </div>

                            <div class="form-group">
                                <label>Tahun</label>
                                <select class="form-control" name="tahun" required>

                                    <?php

                                    $tahun = date("Y");

                                    for ($i = $tahun - 18; $i <= $tahun; $i++) {
                                        echo '
                                            <option value="' . $i . '">' . $i . '</option>

                                        ';
                                    }

                                    ?>

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

$angkatan_ke = @$_POST['angkatan_ke'];
$tahun = @$_POST['tahun'];

$simpan = @$_POST['simpan'];

if ($simpan) {

    $sql = $koneksi->query("INSERT INTO tb_angkatan (angkatan_ke, tahun) VALUES ('$angkatan_ke', '$tahun')");

    if ($sql) {
?>

        <script type="text/javascript">
            alert("Data Berhasil disimpan")
            window.location.href = "?page=angkatan";
        </script>

<?php
    }
}

?>