

<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Pengajuan Lomba
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>NIM</th>
                                            <th>Nama Mahasiswa</th>
                                            <!-- <th>Jenis kelamin</th> -->
                                            <th>Foto</th>
                                            <th>Aksi</th>                                        
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $buku = $mysqli->query("SELECT * FROM tb_pengajuanlomba ");
                                            $no = 0;
                                            while( $b = $buku->fetch_assoc()){
                                            $no++;
                                         ?>

                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $b["nim_mhs"]; ?></td>
                                            <td><?= $b["nama_mhs"]; ?></td>
                                            <td><img src="images/buku/<?= $b["gambar"]; ?>" height="100"></td>
                                            <td>
                                                <a href="?page=buku&aksi=edit&id=<?php echo $b['id'];?>" class="btn btn-success">Terima </a>
                                                <a href="?page=buku&aksi=delete&id=<?php echo $b['id'];?>" class="btn btn-danger" onclick="return confirm('Anda yakin mau menghapus data ini?');">Tolak </a>
                                            </td>
                                          <?php } ?>
                                        </tr>
                                    </tbody>
                                </table>

                                 </div>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>  