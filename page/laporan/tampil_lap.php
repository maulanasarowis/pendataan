<div class="row">
    <div class="col-lg-12">
        <h3 class="page-header"><strong>Data Penerima Manfaat Per-Angkatan</strong></h3> 
    </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default"> 
                        <div class="panel-heading">
                            Pilih Angkatan
                        </div>

                        <div class="panel-body">
                            <div class="row">
                                    <form method="get" role="form" action="?page=tampil_lap">


                                <div class="col-lg-6">
                                    <input type="hidden" name="page" value="tampil_lap">

                                        <div class="form-group">
                                            
                                            <select class="form-control" name="angkatan">

                                    <?php 

                                        $sql = $koneksi -> query ("SELECT * FROM tb_angkatan");    
                                    ?>
                                        <option value="Semua">-Pilih Angkatan-</option>

                                    <?php
                                        while($data = $sql -> fetch_assoc()){

                                        echo "<option value='$data[idang]'>Angkatan ke-$data[angkatan_ke] Tahun $data[tahun] </option>";    
                                    }
                                    ?>
                                            </select>
                                        </div>
    
               
                                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Cari</button></a>
                                        

                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                    </form>

                            </div>
                            <!-- /.row (nested) --><br>

				            <div class="panel panel-default">
				            <div class="panel-heading"> Data Penerima Manfaat-PM </div>
				                <div class="panel-body">
				                    <div class="table-responsive">
				                        <table class="table table-striped table-bordered table-hover" id="dataTables-example">
				                            <thead>
				                                <tr>
				                                <th>No.</th>
				                                <th class="text-center">Nama & NIK</th>
				                                <th class="text-center">Tempat dan Tanggal Lahir</th>
				                                <th class="text-center">Pendidikan</th>
				                                <th class="text-center">Nama  Orang Tua</th>
				                                <th class="text-center">Pekerjaan Orang Tua</th>
				                                <th class="text-center">Alamat</th>
				                                <th class="text-center">Jurusan</th>
				                                </tr>
				                            </thead> 
				                            
				                            <tbody>

				                            <?php
				                                $no = 1;

				                                $ang=$_GET['angkatan'];
				                                if($ang=="Semua")
				                                {
				                                    $sql = $koneksi -> query ("SELECT * FROM tb_pm,tb_jurusan,tb_daerah,tb_angkatan 
				                                    						   WHERE tb_pm.idjur=tb_jurusan.idjur AND tb_pm.idda=tb_daerah.idda AND 
                                                                               tb_pm.idang=tb_angkatan.idang");
				                                }
				                                else
				                                {
				                                    $sql = $koneksi -> query ("SELECT * from tb_pm,tb_jurusan,tb_daerah,tb_angkatan 
				                                    						   WHERE tb_pm.idjur=tb_jurusan.idjur AND tb_pm.idda=tb_daerah.idda AND 
				                                    						   tb_pm.idang=tb_angkatan.idang AND tb_angkatan.idang='$_GET[angkatan]'"); 
				                                }

				                                    while($data = $sql -> fetch_assoc())
				                                    {
				                                       
				                            ?>

				                            <tr>

				                                <td><?php echo $no++; ?></td>
				                                <td class="text-center"><?php echo $data ['nama'] ?> <br> <?php echo $data ['nik'] ?></td>
				                                <td class="text-center"><?php echo $data ['tmptlahir'] ?><br> <?php echo $data ['tgllahir'] ?></td>
				                                <td class="text-center"><?php echo $data ['pendidikan'] ?></td>
				                                <td class="text-center"><?php echo $data ['namabpk'] ?> & <?php echo $data ['namaibu'] ?></td>
				                                <td class="text-center"><?php echo $data ['k_bpk'] ?> & <?php echo $data ['k_ibu'] ?></td>
				                                <td class=""><?php echo $data ['alamat'] ?>,<?php echo $data ['nama_daerah'] ?></td>
				                                <td class="text-center"><?php echo $data ['nama_jurusan'] ?></td>

				                               
				                 
				                               
				                                          
				                            </tr>
				                                <?php 
				                                
				                                } 

				                                ?>

				                            </tbody>
				                        </table>
				                     </div>

				                    <td colspan="2"> <br>
				                        <a href ="cetak_pdf_perangkatan.php?page=laporan&angkatan=<?php echo $_GET['angkatan']; ?>" class = "btn btn-success" style="margin-bottom: 5px;"><i class="fa fa-print"> Cetak PDF </i></a>
				                    </td>

				                    
				                            
				                </div>
				            </div>

                        </div>                      
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row --> 

            

