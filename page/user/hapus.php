<?php

	$id = $_GET['id'];

	$sql = $koneksi->query("delete from tb_user where id='$id' ");

	if (sql) {
    ?>
        <script type="text/javascript">
        alert("Hapus Data Berhasil");
        window.location.href="?page=user";
        </script>
        <?php
    }

?>