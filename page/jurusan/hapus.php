<?php

	$idjur = $_GET ['idjur'];

	$koneksi -> query("DELETE FROM tb_jurusan WHERE idjur = '$idjur'")

?>

	 <script type="text/javascript">
        alert ("Data Berhasil dihapus")
        window.location.href="?page=jurusan";
     </script>