<?php

$idang = $_GET['idang'];
$sql = $koneksi->query("select * from tb_angkatan where idang='$idang'");
$tampil = $sql->fetch_assoc();

$tahun2 = $tampil['tahun'];
?>


<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Edit Data Angkatan</strong></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">Edit Data Angkatan</div>
            <div class="panel-body">
                <div class="row">

                    <form method="post" role="form" action="">

                        <div class="col-lg-12">
                            <div class="form-group">
                                <label>Angkatan</label>
                                <input class="form-control" type="number" placeholder="Angkatan Ke-" name="angkatan_ke" value="<?php echo $tampil['angkatan_ke']; ?>" />
                            </div>

                            <div class="form-group">
                                <label>Tahun</label>
                                <select class="form-control" name="tahun">

                                    <?php

                                    $tahun = date("Y");

                                    for ($i = $tahun - 18; $i <= $tahun; $i++) {

                                        if ($i == $tahun2) {
                                            echo '<option value="' . $i . '"selected>' . $i . '</option>';
                                        } else {
                                            echo '<option value="' . $i . '">' . $i . '</option>';
                                        }
                                    }
                                    ?>


                            </div>

                            <div>
                                <input type="submit" name="simpan" value="Edit" class="btn btn-primary" style="margin-top: 15px;">
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

    $sql = $koneksi->query("UPDATE tb_angkatan SET angkatan_ke='$angkatan_ke', tahun='$tahun' where idang='$idang'");

    if ($sql) {
?>

        <script type="text/javascript">
            alert("Data Berhasil diedit")
            window.location.href = "?page=angkatan";
        </script>

<?php
    }
}

?>