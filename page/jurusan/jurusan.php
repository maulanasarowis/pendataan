<div class="row">
    <div class="col-md-12">
        <h3 class="page-header"><strong>Data Jurusan Penerima Manfaat Di PSBR "Rumbai" Pekanbaru</strong></h3>
                    <!-- Advanced Tables -->
        <a href ="?page=jurusan&aksi=tambah" class = "btn btn-success" style="margin-bottom: 5px;"><i class ="fa fa-plus"> </i> Tambah Data </a>
        <div class="panel panel-default">
            <div class="panel-heading"> Data Jurusan </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                                <tr>
                                 <th>No.</th>   
                                <th class="text-center">Nama Jurusan</th>
                                <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            
                            <tbody>

                            <?php
                                $no = 1;
                                $sql = $koneksi -> query ("SELECT * FROM tb_jurusan");

                                while ($data = $sql -> fetch_assoc()) {
                            ?>

                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo  $data ['nama_jurusan'] ?></td>
                                
                                <td class="text-center"> 
                                    <a href="?page=jurusan&aksi=edit&idjur=<?php echo $data['idjur']; ?>"><button type="button" class="btn btn-primary"><i class="fa fa-edit "></i> Edit</button>
                                    <a href="?page=jurusan&aksi=hapus&idjur=<?php echo $data['idjur']; ?>"><button type="button" class="btn btn-danger"><i class="fa fa-trash-o"></i> Hapus</button></a>
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