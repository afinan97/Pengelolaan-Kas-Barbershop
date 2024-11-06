

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-info">
                        <div class="panel-heading">
                             Data User
                        </div>
                        <div class="panel-body" >
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Username</th>
                                            <th>Nama</th>
                                            <th>Level</th>
                                            <th>Password</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        <?php

                                            $no = 1;

                                            $sql = $koneksi->query("select * from tb_user ");

                                            while ($data= $sql->fetch_assoc()) {

                                        ?>

                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['username'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['level'];?></td>
                                            <td><?php echo $data['password'];?></td>

                                             <td>
                                                <a href="?page=user&aksi=ubah&id=<?php echo $data['id']; ?>" class="btn btn-primary"> Ubah</a>
                                                <a onclick="return confirm('Anda Yakin Akan Mengahapus Data Ini ... ???')" href="?page=user&aksi=hapus&id=<?php echo $data['id']; ?>" class="btn btn-danger" > Hapus</a>

                                            </td>
                                        </tr>


                                        <?php  } ?>
                                    </tbody>

                                    </table>
                                  </div>

                                  <!--halaman tambah data-->
                            <div class="panel-body">
                            <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                              Tambah Data User
                            </button>
                            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                            <h4 class="modal-title" id="myModalLabel">Form Tambah Data User</h4>
                                        </div>
                                        <div class="modal-body">
                                        <form role="form" method="POST">
                                            <div class="form-group">
                                            <label>Username</label>
                                            <input class="form-control" placeholder="Username" name="username"/>
                                            </div>

                                            <div class="form-group">
                                            <label>Nama</label>
                                            <input class="form-control" placeholder="Nama" type="text" name="nama" />
                                            </div>

                                            <div class="form-group">
                                            <label>Password</label>
                                            <input class="form-control" placeholder="Password" type="password" name="password"/>
                                            </div>

                                            <div class="form-group">
                                            <label>Level</label>
                                            <input class="form-control" type="number" name="level" />
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
                            $tgl = $_POST['tgl'];
                            $ket = $_POST['ket'];
                            $jml = $_POST['jml'];

                            $sql = $koneksi->query("insert into tb_kas (kode, tanggal, keterangan, jumlah, jenis, keluar) values ('$kode', '$tgl', '$ket', 0 , 'keluar', '$jml') ");

                            if (sql) {
                                ?>
                                    <script type="text/javascript">
                                    alert("Data Berhasil Disimpan");
                                    window.location.href="?page=pengeluaran";
                                </script>
                                <?php
                            }

                        }
                    ?>
                    <!--selesai-->

                                 
                        </div>
                     </div>
                   </div>
     </div>                          