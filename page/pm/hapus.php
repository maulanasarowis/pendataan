<?php

$idpm = $_GET['idpm'];

$koneksi->query("DELETE FROM tb_pm WHERE idpm = '$idpm'")

?>

<script type="text/javascript">
   alert("Data Berhasil dihapus")
   window.location.href = "?page=pm&angkatan=Semua";
</script>