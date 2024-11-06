<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             Rekap Data Barbershop
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kode</th>
                                            <th>Tanggal</th>
                                            <th>Keterangan</th>
                                            <th>Pemasukkan</th>
                                            <th>Jenis</th>
                                            <th>Pengeluaran</th>
                                            

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from tb_kas");
                                            while ($data=$sql->fetch_assoc()) {
                                              
                                        ?>


                                        <tr class="odd gradeX">
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode'];?></td>
                                            <td><?php echo date('d F Y', strtotime( $data['tanggal']));?></td>
                                            <td><?php echo $data['keterangan'];?></td>
                                            <td align="right"><?php echo number_format($data['jumlah']).",-";?></td>
                                            <td><?php echo $data['jenis'];?></td>
                                            <td align="right"><?php echo number_format($data['keluar']).",-";?></td>
                                           
                                        </tr>
                                        <?php
                                            $total= $total+$data['jumlah'];
                                            $total_keluar = $total_keluar+$data['keluar'];
                                            $saldo_akhir = $total-$total_keluar;
                                            }
                                        ?>
                                    </tbody>

                                    <tr>
                                        <th colspan="5" style="text-align: center; font-size: 17px">Total Kas Masuk</th>
                                        <th style="text-align: right; font-size: 16px"><?php echo "Rp.".number_format($total)."-";?></th>
									</tr>

									<tr>
                                        <th colspan="5" style="text-align: center; font-size: 17px">Total Kas Keluar</th>
                                        <th style="text-align: right; font-size: 16px"><?php echo "Rp.".number_format($total_keluar)."-";?></th>
									</tr>

									<tr>
                                        <th colspan="5" style="text-align: center; font-size: 17px">Total Saldo</th>
                                        <th style="text-align: right; font-size: 16px"><?php echo "Rp.".number_format($saldo_akhir)."-";?></th>
									</tr>


                                </table>
                            </div>
