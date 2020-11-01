<?php

session_start();

$koneksi = new mysqli("localhost", "root", "", "psbr");

if ($_SESSION['admin']) {



?>

    <!DOCTYPE html>
    <html lang="en">
    <!-- <html xmlns="http://www.w3.org/1999/xhtml"> -->

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>SPPM - PSBR "RUMBAI"</title>
        <!-- BOOTSTRAP STYLES-->
        <link href="assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FONTAWESOME STYLES-->
        <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
        <link href="assets/css/custom.css" rel="stylesheet" />
        <!-- GOOGLE FONTS-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
        <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    </head>

    <body>
        <div id="wrapper">
            <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand"> SPPM-Rumbai</a>
                </div>

                <div style="color: white;
                padding: 15px 50px 5px 50px;
                float: right;
                font-size: 16px;"><?php echo "Tanggal : " . date("d-M-Y"); ?> &nbsp; <a onclick="return confirm('Anda Yakin Ingin Keluar ?')" href="logout.php" class="btn btn-danger square-btn-adjust">Logout</a>
                </div>
            </nav>
            <!-- /. NAV TOP  -->
            <nav class="navbar-default navbar-side" role="navigation">
                <div class="sidebar-collapse">

                    <ul class="nav" id="main-menu">
                        <div style="color: white;">
                            <li class="text-center">
                                <img src="assets/img/psbr.png" class="user-image img-responsive" width="128" height="128" />
                                <h5>Panti Sosial Bina Remaja</h5>
                                <h5>"Rumbai" Pekanbaru - PSBR</h5>
                            </li>
                        </div>
                        <li>
                            <a></a>
                        </li>
                        <li>
                            <a href="?page=halaman1"><i class="glyphicon glyphicon-home fa-1x"></i> Home</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-users fa-1x"></i>Penerima Manfaat - PM <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="?page=input">Tambah Data PM</a>
                                </li>
                                <li>
                                    <a href="?page=tampil">Lihat Data PM</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=angkatan"><i class="fa fa-edit fa-1x"></i> Data Angkatan</a>
                        </li>
                        <li>
                            <a href="?page=jurusan"><i class="fa fa-edit fa-1x"></i> Data Jurusan</a>
                        </li>
                        <li>
                            <a href="?page=daerah"><i class="fa fa-edit fa-1x"></i> Data Daerah</a>
                        </li>
                        <li>
                            <a href=""><i class="fa fa-print fa-1x"></i> Laporan <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li>
                                    <a href="?page=laporan&angkatan=Semua">PM Per-Angkatan</a>
                                </li>
                                <li>
                                    <a href="?page=rekap&angkatan=Semua">Rekap Daerah Per-Angkatan</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="?page=pengguna"><i class="fa fa-user fa-1x"></i> Pengguna</a>
                        </li>


                    </ul>

                </div>

            </nav>
            <!-- /. NAV SIDE  -->
            <div id="page-wrapper">
                <div id="page-inner">
                    <div class="row">
                        <div class="col-md-12">

                            <?php

                            $page = @$_GET['page'];
                            $aksi = @$_GET['aksi'];

                            if ($page == "halaman1") {
                                if ($aksi == "") {
                                    include "halaman_awal.php";
                                }
                            } elseif ($page == "input") {
                                if ($aksi == "") {
                                    include "page/pm/input.php";
                                }
                            } elseif ($page == "pm") {
                                if ($aksi == "") {
                                    include "page/pm/pm.php";
                                }
                            } elseif ($page == "tampil") {
                                if ($aksi == "") {
                                    include "page/pm/tampil.php";
                                } elseif ($aksi == "kembali") {
                                    include "page/pm/tampil.php";
                                } elseif ($aksi == "detail") {
                                    include "page/pm/detail_pm.php";
                                } elseif ($aksi == "cetak") {
                                    include "page/pm/cetak.php";
                                } elseif ($aksi == "edit") {
                                    include "page/pm/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/pm/hapus.php";
                                }
                            } elseif ($page == "angkatan") {
                                if ($aksi == "") {
                                    include "page/angkatan/angkatan.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/angkatan/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/angkatan/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/angkatan/hapus.php";
                                }
                            } elseif ($page == "jurusan") {
                                if ($aksi == "") {
                                    include "page/jurusan/jurusan.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/jurusan/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/jurusan/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/jurusan/hapus.php";
                                }
                            } elseif ($page == "daerah") {
                                if ($aksi == "") {
                                    include "page/daerah/daerah.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/daerah/tambah.php";
                                } elseif ($aksi == "edit") {
                                    include "page/daerah/edit.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/daerah/hapus.php";
                                }
                            } elseif ($page == "laporan") {
                                if ($aksi == "") {
                                    include "page/laporan/tampil_lap.php";
                                }
                            } elseif ($page == "tampil_lap") {
                                if ($aksi == "") {
                                    include "page/laporan/tampil_lap.php";
                                }
                            } elseif ($page == "rekap") {
                                if ($aksi == "") {
                                    include "page/rekap/tampil_rek.php";
                                }
                            } elseif ($page == "tampil_rek") {
                                if ($aksi == "") {
                                    include "page/rekap/tampil_rek.php";
                                }
                            } elseif ($page == "pengguna") {
                                if ($aksi == "") {
                                    include "page/pengguna/pengguna.php";
                                } elseif ($aksi == "kembali") {
                                    include "halaman_awal.php";
                                } elseif ($aksi == "tambah") {
                                    include "page/pengguna/tambah.php";
                                } elseif ($aksi == "tampil_pengguna") {
                                    include "page/pengguna/tampil.php";
                                } elseif ($aksi == "hapus") {
                                    include "page/pengguna/hapus.php";
                                }
                            } elseif ($page == "") {

                                include "halaman_awal.php";
                            }

                            ?>

                        </div>
                    </div>
                    <!-- /. PAGE INNER  -->
                </div>
                <!-- /. PAGE WRAPPER  -->
            </div>
            <!-- /. WRAPPER  -->
            <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
            <!-- JQUERY SCRIPTS -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- BOOTSTRAP SCRIPTS -->
            <script src="assets/js/bootstrap.min.js"></script>
            <!-- METISMENU SCRIPTS -->
            <script src="assets/js/jquery.metisMenu.js"></script>
            <script src="assets/js/dataTables/jquery.dataTables.js"></script>
            <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
            <script>
                $(document).ready(function() {
                    $('#dataTables-example').dataTable();
                });
            </script>
            <!-- CUSTOM SCRIPTS -->
            <script src="assets/js/custom.js"></script>


    </body>

    </html>


<?php

} else {

    header("location:login.php");
}

?>