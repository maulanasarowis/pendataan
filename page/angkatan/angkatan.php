<div class="row">
    <div class="col-md-12">
         <h3 class="page-header"><strong>Data Angkatan Penerima Manfaat Di PSBR "Rumbai" Pekanbaru</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=angkatan&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"></i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Angkatan </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                <th class="text-center">Angkatan</th>
                                <th class="text-center">Tahun</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $sql = $koneksi -> query ("select * from tb_angkatan");

                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>

                                <td class="text-center">Angkatan <?php echo  $data ['angkatan_ke'] ?></td>
                                <td class="text-center"><?php echo $data ['tahun'] ?></td>
                                
                                <td class="text-center"> 
                                    <a href="?page=angkatan&aksi=edit&idang=<?php echo $data['idang']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="?page=angkatan&aksi=hapus&idang=<?php echo $data['idang']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
                                </td> 
                                          
                            </tr>
                                <?php } ?>

                            </tbody>
                        </table>
                     </div>
                            
                </div>
            </div>

        </div>
</div>