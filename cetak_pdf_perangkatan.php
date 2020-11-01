<?php

ob_start();
 //Koneksi ke database dan tampilkan datanya
$koneksi = new mysqli ("localhost","root","","psbr");

$sql = $koneksi -> query ("SELECT * from tb_pm,tb_jurusan,tb_daerah,tb_angkatan 
                                   WHERE tb_pm.idjur=tb_jurusan.idjur AND tb_pm.idda=tb_daerah.idda AND 
                                   tb_pm.idang=tb_angkatan.idang AND tb_angkatan.idang='$_GET[angkatan]'"); 
$data = $sql -> fetch_assoc();

include('./mpdf60/mpdf.php');
 

?>
<style>
td {
    padding: 3px 5px 3px 5px;
    border-right: 1px solid #666666;
    border-bottom: 1px solid #666666;
}
 
.head td {
    font-weight: bold;
    font-size: 14px;
    background: #0;
}
 
table .main tbody tr td {
    font-size: 14px;
}
 
table, table .main {
    width: 100%;
    border-top: 1px solid #666;
    border-left: 1px solid #666;
    border-collapse: collapse;
    background: #fff;
}
.style5 {font-size: 20px;}
.style7 {font-size: 18px;}
.style4 {
    font-size: 12px;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
}

</style>
 <p align="center"  class="style4">DATA PENERIMA MANFAAT DI PSBR "RUMBAI" PEKANBARU</p>
 <p align="center"  class="style4">ANGKATAN <?php echo "$data[angkatan_ke]";?>  TAHUN <?php echo "$data[tahun]";?></p>
<table class='main' repeat_header="1" cellspacing="0" width="100%" style="width:100%">
<thead>
<tr class="head">
    <td width="35" height="80" align='center'><span class="style5">No.</span></td>
    <td align='center' width="267"><span class="style5">Nama & NIK</span></td>
    <td align='center' width="296"><span class="style5">Tempat dan Tanggal Lahir</span></td>
    <td align='center' width="200"><span class="style5">Pendidikan</span></td>
    <td align='center' width="267"><span class="style5">Nama Orang Tua</span></td>
    <td align='center' width="267"><span class="style5">Pekerjaan Orang Tua</span></td>
    <td align='center' width="329"><span class="style5">Alamat</span></td>
    <td align='center' width="207"><span class="style5">Jurusan</span></td>
</tr>
</thead>
<?php
 //Koneksi ke database dan tampilkan datanya

 $nomor=1;


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
<tbody>
<tr  style="font-size: 12px">
    <td align='center' height="60"><span class="style7"><?php echo $nomor++;?></span></td>
    <td align='center'><span class="style7"><?php echo "$data[nama]";?><br><?php echo "$data[nik]";?></span></td>
    <td align='center'><span class="style7"><?php echo "$data[tmptlahir]";?>,<?php echo "$data[tgllahir]";?></span></td>
    <td align='center'><span class="style7"><?php echo "$data[pendidikan]";?></span></td>
    <td align='center' ><span class="style7"><?php echo "$data[namabpk]";?> & <?php echo "$data[namaibu]";?></span></td>
    <td align='center' ><span class="style7"><?php echo "$data[k_bpk]";?> & <?php echo "$data[k_ibu]";?></span></td>
    <td><span class="style7"><?php echo "$data[alamat]";?>,<?php echo "$data[nama_daerah]";?></span></td>
    <td align='center' ><span class="style7"><?php echo "$data[nama_jurusan]";?></span></td>
</tr>

<?php } ?>
</tbody>
</table>
 
<?php
$content = ob_get_clean(); 
 
try {
    $mpdf=new mPDF('utf-8', "A4-L", 9 ,'Times new Roman', 5, 5, 20, 5, 5, 4, 'L');
    $mpdf->SetTitle("Data Penerima Manfaat di PSBR ''RUMBAI'' Pekanbaru");
    
    $mpdf->WriteHTML($content);
    $mpdf->SetLineWidth(1);
    $mpdf->SetFont('Arial','i',10);
    $mpdf->Output("Data PM Per-angkatan.pdf","i");
} catch(Exception $e) {
    echo $e;
    exit;
}
?>