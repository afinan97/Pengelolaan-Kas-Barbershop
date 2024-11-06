<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("delete from tb_kas where kode='$id' ");

	if (sql) {
    ?>
        <script type="text/javascript">
        alert("Hapus Data Berhasil");
        window.location.href="?page=pemasukkan";
        </script>
        <?php
    }

?>