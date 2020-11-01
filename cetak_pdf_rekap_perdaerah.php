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
.style5 {font-size: 12px;}
.style7 {font-size: 12px;}
.style4 {
    font-size: 12px;
    font-family: "Times New Roman", Times, serif;
    font-weight: bold;
}

</style>
 <p align="center"  class="style4">REKAPITULASI PER DAERAH DATA PENERIMA MANFAAT DI PSBR "RUMBAI" PEKANBARU</p>
 <p align="center"  class="style4">ANGKATAN <?php echo "$data[angkatan_ke]";?>  TAHUN <?php echo "$data[tahun]";?></p> <br>
<table class='main' repeat_header="1" cellspacing="0" width="50%" style="width:50%" align="center">
<thead>
<tr class="head">
    <td width="35" height="40" align='center'><span class="style5">No.</span></td>
    <td align='center' width="212"><span class="style5">Nama Daerah</span></td>
    <td align='center' width="296"><span class="style5">Jumlah</span></td>
</tr>
</thead>
<?php
 //Koneksi ke database dan tampilkan datanya

 $nomor=1;
 $total = 0;


$ang=$_GET['angkatan'];
    if($ang=="Semua")
    {
        $sql = $koneksi -> query (" SELECT nama_daerah, COUNT(*) AS jumlah
                                    FROM tb_pm,tb_daerah
                                    WHERE tb_pm.idda = tb_daerah.idda
                                    GROUP BY nama_daerah");
    }
    else
    {
        $sql = $koneksi -> query ("SELECT nama_daerah, COUNT(*) AS jumlah
                                   FROM tb_pm,tb_daerah,tb_angkatan
                                   WHERE tb_pm.idda = tb_daerah.idda AND 
                                   tb_pm.idang=tb_angkatan.idang AND tb_angkatan.idang='$_GET[angkatan]'
                                   GROUP BY nama_daerah"); 
    }

 while($data = $sql -> fetch_assoc())
{
?>
<tbody>
<tr  style="font-size: 12px">
    <td align='center' height="30"><span class="style7"><?php echo $nomor++;?></span></td>
    <td align='center'><span class="style7"><?php echo "$data[nama_daerah]";?></span></td>
    <td align='center'><span class="style7"><?php echo "$data[jumlah]";?> Orang</span></td>
</tr>

<?php

$total= $total + $data['jumlah'];

 } ?>
<tr  style="font-size: 12px">
    
    <td align='center' height="30" colspan="2">Total Jumlah</span></td>
    <td align='center'><span class="style7"><?php echo $total;?></span> Orang</td>
</tr>


</tbody>
</table>
 
<?php
$content = ob_get_clean(); 
 
try {
    $mpdf=new mPDF('utf-8', "A4", 9 ,'Times new Roman', 5, 5, 20, 5, 5, 4, 'L');
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