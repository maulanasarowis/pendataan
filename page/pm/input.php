<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Input Data Penerima Manfaat Di PSBR "Rumbai" Pekanbaru</strong></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"> Input Data Penerima Manfaat </div>
            <div class="panel-body">
                <div class="row">

                    <form method="post" role="form">

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>NIK</label>
                                <input type="number" class="form-control" placeholder="Nik" name="nik">
                            </div>
                            <div class="form-group">
                                <label>Nama</label>
                                <input class="form-control" placeholder="Nama" name="nama" required>
                            </div>
                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" value="Laki-laki" checked>Laki - Laki
                                    </label>
                                </div>
                                <div class="radio">
                                    <label>
                                        <input type="radio" name="jk" value="Perempuan">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tempat Lahir</label>
                                <input class="form-control" placeholder="Tempat Lahir" name="tmptlahir">
                            </div>

                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input class="form-control" type="date" placeholder="Tanggal Lahir" name="tgllahir" required>
                            </div>

                            <div class="form-group">
                                <label>Pendidikan</label>
                                <input class="form-control" placeholder="Pendidikan" name="pendidikan" required>
                            </div>

                            <div class="form-group input-group">
                                <span class="input-group-addon">+62</span>
                                <input type="number" class="form-control" placeholder="No Handphone" name="nohp">
                            </div>
                            <div class="form-group">
                                <label>Jurusan</label>
                                <select class="form-control" name="jurusan" required>
                                    <option>- Pilih Jurusan - </option>

                                    <?php

                                    $sql = $koneksi->query("SELECT * FROM tb_jurusan ORDER BY nama_jurusan ASC");

                                    while ($data = $sql->fetch_assoc()) {
                                        echo "<option value='$data[idjur]'>$data[nama_jurusan]</option>";
                                    }

                                    ?>


                                </select>
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Nama Ayah</label>
                                <input class="form-control" placeholder="Nama" name="namabpk" required>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input class="form-control" placeholder="Pekerjaan" name="k_bpk" required>
                            </div>
                            <div class="form-group">
                                <label>Nama Ibu</label>
                                <input class="form-control" placeholder="Nama" name="namaibu" required>
                            </div>
                            <div class="form-group">
                                <label>Pekerjaan</label>
                                <input class="form-control" placeholder="Pekerjaan" name="k_ibu" required>
                            </div>

                            <div class="form-group">
                                <label>Daerah</label>
                                <select class="form-control" name="daerah" required>
                                    <option>- Pilih Daerah - </option>

                                    <?php

                                    $sql = $koneksi->query("SELECT * FROM tb_daerah ORDER BY nama_daerah ASC");

                                    while ($data = $sql->fetch_assoc()) {
                                        echo "<option value='$data[idda]'>$data[nama_daerah]</option>";
                                    }

                                    ?>

                                </select>
                            </div>

                            <div class="form-group">
                                <label>Alamat</label>
                                <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3" required></textarea>
                            </div>

                            <div class="form-group">
                                <label>Angkatan</label>
                                <select class="form-control" name="angkatan" required>
                                    <option>- Pilih Angkatan - </option>

                                    <?php

                                    $sql = $koneksi->query("SELECT * FROM tb_angkatan ORDER BY idang ASC");

                                    while ($data = $sql->fetch_assoc()) {
                                        echo "<option value='$data[idang]'>Angkatan ke-$data[angkatan_ke] Tahun $data[tahun] </option>";
                                    }

                                    ?>

                                </select>
                            </div>

                            <div>

                                <input type="submit" name="simpan" value="Simpan" class="btn btn-primary" style="margin-top: 30px;">
                                <a href="?page=halaman1" class="btn btn-success" style="margin-top: 30px;">Kembali </a>
                            </div>


                        </div>


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



<?php



$a = @$_POST['nik'];
$b = @$_POST['nama'];
$c = @$_POST['jk'];
$d = @$_POST['tmptlahir'];
$e = @$_POST['tgllahir'];
$f = @$_POST['pendidikan'];
$g = @$_POST['nohp'];
$h = @$_POST['jurusan'];
$i = @$_POST['namabpk'];
$j = @$_POST['k_bpk'];
$k = @$_POST['namaibu'];
$l = @$_POST['k_ibu'];
$m = @$_POST['daerah'];
$n = @$_POST['alamat'];
$o = @$_POST['angkatan'];

$simpan = @$_POST['simpan'];

if ($simpan) {



    $sql = $koneksi->query("INSERT INTO tb_pm (nik,nama,jk,tmptlahir,tgllahir,pendidikan,nohp,idjur,namabpk,k_bpk,namaibu,k_ibu,idda,alamat,idang) 
                                            VALUES ('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$k','$l','$m','$n','$o')") or die(mysqli_error($koneksi));




    if ($sql) {
?>

        <script type="text/javascript">
            alert("Data Berhasil disimpan")
            window.location.href = "?page=pm&angkatan=Semua";
        </script>

    <?php
    } else {
    ?>

        <script type="text/javascript">
            alert("Data Belum Berhasil disimpan")
            window.location.href = "?page=pm";
        </script>

<?php
    }
}

?>