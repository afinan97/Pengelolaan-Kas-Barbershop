<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             Pemasukkan Barbershop
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
                                            <th>Jumlah</th>
                                            <th>Aksi</th>

                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php
                                            $no = 1;
                                            $sql = $koneksi->query("select * from tb_kas where jenis = 'masuk'");
                                            while ($data=$sql->fetch_assoc()) {
                                              
                                        ?>


                                        <tr class="odd gradeX">
                                            <td><?php echo $no++;?></td>
                                            <td><?php echo $data['kode'];?></td>
                                            <td><?php echo date('d F Y');?></td>
                                            <td><?php echo $data['keterangan'];?></td>
                                            <td align="right"><?php echo number_format($data['jumlah']).",-";?></td>
                                            <td>
                                                <a id="edit_data" data-toggle="modal" data-target="#edit" data-id="<?php echo $data['kode'];?>" data-tgl="<?php echo $data['tanggal'];?>" data-ket="<?php echo $data['keterangan'];?>" data-jml="<?php echo $data['jumlah'];?>" class="btn btn-info"><i class="fa fa-edit"></i> Edit</a>
                                                <a onclick="return confirm('Anda Yakin Akan Menghapus Data Ini ?')" href="?page=pemasukkan&aksi=hapus&id=<?php echo $data['kode']; ?>" class="btn btn-danger"><i class="fa fa-trash" ></i>Hapus</a>

                                            </td>
                                        </tr>
                                        <?php
                                            $total= $total+$data['jumlah'];
                                            }
                                        ?>
                                    </tbody>
                                    <tr>
                                        <th colspan="4" style="text-align: center; font-size: 17px">Total Kas Masuk</th>
                                        <th style="text-align: right; font-size: 16px"><?php echo "Rp.".number_format($total)."-";?></th>

                                    </tr>
                                </table>
                            </div>

                                                        <!--halaman tambah data-->
                            <div class="panel-body">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                              Tambah Data
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Tambah Data</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form role="form" method="POST">
                                            <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" placeholder="Input Kode" name="kode"/>
                                            </div>

                                            

                                            <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3" name="ket"></textarea>
                                            </div>

                                            <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jml" />
                                            </div>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <input type="submit" name="simpan" value="Simpan" class="btn btn-primary">
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                   

                    <?php

                        if (isset($_POST['simpan'])) {
                            $kode = $_POST['kode'];
                            $tgl = date('Ymd');
                            $ket = $_POST['ket'];
                            $jml = $_POST['jml'];

                            $sql = $koneksi->query("insert into tb_kas (kode, tanggal, keterangan, jumlah, jenis, keluar) values ('$kode', '$tgl', '$ket', '$jml', 'masuk', 0) ");

                            if (sql) {
                                ?>
                                    <script type="text/javascript">
                                    alert("Data Berhasil Disimpan");
                                    window.location.href="?page=pemasukkan";
                                </script>
                                <?php
                            }

                        }
                    ?>
                    <!--selesai-->

                    <!--edit data-->

                    <div class="panel-body">
                            <div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Edit Data</h4>
                                        </div>
                                        <div class="modal-body" id="modal_edit">
                                        <form role="form" method="POST">
                                            <div class="form-group">
                                            <label>Kode</label>
                                            <input class="form-control" placeholder="Input Kode" name="kode" id="kode" readonly />
                                            </div>

                                            <div class="form-group">
                                            <label>Tanggal</label>
                                            <input class="form-control" type="date" name="tgl" id="tgl" />
                                            </div>

                                            <div class="form-group">
                                            <label>Keterangan</label>
                                            <textarea class="form-control" rows="3" name="ket" id="ket"></textarea>
                                            </div>

                                            <div class="form-group">
                                            <label>Jumlah</label>
                                            <input class="form-control" type="number" name="jml" id="jml" />
                                            </div>
                                        
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                            <input type="submit" name="edit" value="Edit" class="btn btn-primary">
                                        </div>
                                        </form>

                                        <?php

                                            if (isset($_POST['edit'])) {

                                            $kode = $_POST['kode'];
                                            $tgl = $_POST['tgl'];
                                            $ket = $_POST['ket'];
                                            $jml = $_POST['jml'];

                                            $sql = $koneksi->query("update tb_kas set tanggal='$tgl', keterangan='$ket', jumlah='$jml', jenis='masuk', keluar=0 where kode='$kode'");

                                        if (sql) {
                                        ?>
                                            <script type="text/javascript">
                                            alert("Edit Data Berhasil Disimpan");
                                            window.location.href="?page=pemasukkan";
                                            </script>
                                        <?php
                                        }
                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>

                        <script src="assets/js/jquery-1.10.2.js"></script>
                        <script type="text/javascript">
                            
                            $(document).on("click", "#edit_data", function(){

                                var kode = $(this).data('id');
                                var tgl = $(this).data('tgl');
                                var ket = $(this).data('ket');
                                var jml = $(this).data('jml');

                                $("#modal_edit #kode").val(kode);
                                $("#modal_edit #tgl").val(tgl);
                                $("#modal_edit #ket").val(ket);
                                $("#modal_edit #jml").val(jml);


                            })
                        </script>

                        
                    <!--selesai-->


                        </div>
                    </div>
                </div>