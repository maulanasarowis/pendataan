<?php

	$idang = $_GET ['idang'];

	$koneksi -> query("delete from tb_angkatan where idang = '$idang'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=angkatan";
     </script>