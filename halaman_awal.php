<?php
//session_start();
$koneksi = new mysqli("localhost", "root", "", "psbr");

//cek apakah user sudah login
?>


<div id="page-inner">
    <div class="row">
        <div class="col-md-12">

            <h3 align="">Selamat Datang di Sistem Pendataan Penerima Manfaat-SPPM Rumbai</h3> <br>



            <hr />

            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-red set-icon">
                            <i class="fa fa-users fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM tb_pm");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Penerima Manfaat-PM</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM tb_angkatan");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Angkatan</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-blue set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM tb_jurusan");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Jurusan</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-green set-icon">
                            <i class="fa fa-edit fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM tb_daerah");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Daerah</p>
                        </div>
                    </div>
                </div>


                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="panel panel-back noti-box">
                        <span class="icon-box bg-color-brown set-icon">
                            <i class="fa fa-user fa-1x"></i>
                        </span>
                        <div class="text-box">

                            <?php

                            $sql = $koneksi->query("SELECT count(*) AS jumlah FROM tb_admin");
                            $data = $sql->fetch_assoc();
                            ?>

                            <p class="main-text"><?php echo $data['jumlah'] ?></p>
                            <p class="text-muted">Data Admin</p>
                        </div>
                    </div>
                </div>







            </div>

            <!-- /. ROW  -->
            <hr />

        </div>
    </div>
</div>