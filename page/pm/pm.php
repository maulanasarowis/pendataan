<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong>Data Penerima Manfaat Di PSBR "Rumbai" Pekanbaru</strong></h3>

        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading"> Data Penerima Manfaat-PM </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th class="text-center">NIK</th>
                                <th class="text-center" width="35%">Nama</th>
                                <th class="text-center">Jenis Kelamin</th>
                                <th class="text-center">No.Handphone</th>
                                <th class="text-center">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>

                            <?php
                            $no = 1;

                            $ang = $_GET['angkatan'];
                            if ($ang == "Semua") {
                                $sql = $koneksi->query("SELECT * FROM tb_pm");
                            } else {
                                $sql = $koneksi->query("SELECT * FROM tb_pm WHERE idang='$_GET[angkatan]'");
                            }

                            while ($data = $sql->fetch_assoc()) {

                            ?>

                                <tr>

                                    <td><?php echo $no++; ?></td>
                                    <td><?php echo $data['nik'] ?></td>
                                    <td><?php echo $data['nama'] ?></td>
                                    <td class="text-center"><?php echo $data['jk'] ?></td>
                                    <td><?php echo $data['nohp'] ?></td>

                                    <td class="text-center">
                                        <a href="?page=tampil&aksi=detail&idpm=<?php echo $data['idpm']; ?>""><button type=" button" class="btn btn-warning">Details</button> </a>
                                        <a href="?page=tampil&aksi=edit&idpm=<?php echo $data['idpm']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                            <a href="?page=tampil&aksi=hapus&idpm=<?php echo $data['idpm']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
                                    </td>

                                </tr>
                            <?php

                            }

                            ?>

                        </tbody>
                    </table>
                </div>

                <td colspan="2"><br>
                    <a href="?page=tampil&aksi=kembali" class="btn btn-success" style="margin-bottom: 5px;">Kembali </a>
                </td>

            </div>
        </div>

    </div>
</div>