<?php

$idpm = $_GET['idpm'];
$sql = $koneksi->query("SELECT * FROM tb_pm WHERE idpm='$idpm'");
$tampil = $sql->fetch_assoc();
?>

<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Detail Penerima Manfaat : <?php echo $tampil['nama']; ?></strong></h3>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading"> Input Data Penerima Manfaat </div>
            <div class="panel-body">
                <div class="row">

                    <form method="post" role="form">
                        <fieldset disabled="disabled">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>NIK</label>
                                    <input type="number" class="form-control" placeholder="Nik" name="nik" value="<?php echo $tampil['nik']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama</label>
                                    <input class="form-control" placeholder="Nama" name="nama" value="<?php echo $tampil['nama']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <?php if ($tampil['jk'] == "Laki-laki") { ?>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jk" value="Laki-laki" checked>
                                                Laki - Laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jk" value="Perempuan">
                                                Perempuan
                                            </label>
                                        </div>

                                    <?php } ?>

                                    <?php if ($tampil['jk'] == "Perempuan") { ?>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jk" value="Laki-laki">
                                                Laki - Laki
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label>
                                                <input type="radio" name="jk" value="Perempuan" checked>
                                                Perempuan
                                            </label>
                                        </div>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label>Tempat Lahir</label>
                                    <input class="form-control" placeholder="Tempat Lahir" name="tmptlahir" value="<?php echo $tampil['tmptlahir']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Tanggal Lahir</label>
                                    <input class="form-control" type="date" placeholder="Tanggal Lahir" name="tgllahir" value="<?php echo $tampil['tgllahir']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Pendidikan</label>
                                    <input class="form-control" placeholder="Pendidikan" name="pendidikan" value="<?php echo $tampil['pendidikan']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Nomor Handphone</label>
                                    <div class="form-group input-group">
                                        <span class="input-group-addon">+62</span>
                                        <input type="number" class="form-control" placeholder="No Handphone" name="nohp" value="<?php echo $tampil['nohp']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Alamat</label>
                                    <textarea class="form-control" placeholder="Alamat" name="alamat" rows="3"><?php echo $tampil['alamat']; ?></textarea>
                                </div>


                            </div>

                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label>Nama Ayah</label>
                                    <input class="form-control" placeholder="Nama" name="namabpk" value="<?php echo $tampil['namabpk']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input class="form-control" placeholder="Pekerjaan" name="k_bpk" value="<?php echo $tampil['k_bpk']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Nama Ibu</label>
                                    <input class="form-control" placeholder="Nama" name="namaibu" value="<?php echo $tampil['namaibu']; ?>">
                                </div>
                                <div class="form-group">
                                    <label>Pekerjaan</label>
                                    <input class="form-control" placeholder="Pekerjaan" name="k_ibu" value="<?php echo $tampil['k_ibu']; ?>">
                                </div>

                                <div class="form-group">
                                    <label>Daerah</label>
                                    <select class="form-control" name="daerah">
                                        <option>- Pilih Daerah - </option>

                                        <?php

                                        $sql = $koneksi->query("SELECT * FROM tb_daerah");

                                        while ($data = $sql->fetch_assoc()) {


                                            if ($tampil['idda'] == $data['idda']) {

                                                echo "<option value='$data[idda]' selected>$data[nama_daerah]</option>";
                                            } else {
                                                echo "<option value='$data[idda]'>$data[nama_daerah]</option>";
                                            }
                                        }

                                        ?>

                                    </select>
                                </div>


                                <div class="form-group">
                                    <label>Jurusan</label>
                                    <select class="form-control" name="jurusan">
                                        <option>- Pilih Jurusan - </option>

                                        <?php

                                        $sql = $koneksi->query("SELECT * FROM tb_jurusan");

                                        while ($data = $sql->fetch_assoc()) {


                                            if ($tampil['idjur'] == $data['idjur']) {

                                                echo "<option value='$data[idjur]' selected>$data[nama_jurusan]</option>";
                                            } else {
                                                echo "<option value='$data[idjur]'>$data[nama_jurusan]</option>";
                                            }
                                        }

                                        ?>

                                    </select>
                                </div>

                                <div class="form-group">
                                    <label>Angkatan</label>
                                    <select class="form-control" name="angkatan">
                                        <option>- Pilih Angkatan - </option>

                                        <?php

                                        $sql = $koneksi->query("SELECT * FROM tb_angkatan");

                                        while ($data = $sql->fetch_assoc()) {


                                            if ($tampil['idang'] == $data['idang']) {

                                                echo "<option value='$data[idang]' selected>Angkatan ke-$data[angkatan_ke] Tahun $data[tahun] </option>";
                                            } else {
                                                echo "<option value='$data[idang]'>Angkatan ke-$data[angkatan_ke] Tahun $data[tahun] </option>";
                                            }
                                        }

                                        ?>

                                    </select>
                                </div>

                            </div>
                            <!-- /.col-lg-6 (nested) -->
                        </fieldset>
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