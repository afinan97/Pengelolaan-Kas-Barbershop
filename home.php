<?php

    $sql = $koneksi->query("select * from tb_kas");
    while ($data=$sql->fetch_assoc()) {
        
        $jml = $data['jumlah'];
        $total_masuk = $total_masuk+$jml;

        $jml_keluar = $data['keluar'];
        $total_keluar =$total_keluar+$jml_keluar;

        $total = $total_masuk-$total_keluar;
    }


?>


            <div id="page-inner">
                <div class="row">
                    <div style="text-align: center; font-family: verdana" class="col-md-12">
                     <h2>Manajemen Kas Barbershop</h2>
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-sign-in"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo "Rp." .number_format( $total_masuk); ?>,-</p>
                    <p class="text-muted">Pemasukkan Barbershop</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-sign-out"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo "Rp." .number_format( $total_keluar); ?>,-</p>
                    <p class="text-muted">Pengeluaran Barbershop</p>
                </div>
             </div>
		     </div>
                    <div class="col-md-4 col-sm-6 col-xs-6">           
			<div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-bell-o"></i>
                </span>
                <div class="text-box" >
                    <p class="main-text"><?php echo "Rp." .number_format( $total); ?>,-</p>
                    <p class="text-muted">Saldo</p>
                </div>
             </div>
		     </div>
                   