<?php

	$idda = $_GET ['idda'];

	$koneksi -> query("DELETE FROM tb_daerah WHERE idda = '$idda'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=daerah";
     </script>