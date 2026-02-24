<a href="?page=pengajuanlomba&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px; " >
<i class="fa fa-plus" style="margin-right: 7px;"> </i>Tambah Data</a>

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
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama Pengaju</th>
                                            <th>Dosen Pembimbing</th>
                                            <th>Kategori Lomba</th>
                                            <th>Nama Tim</th>
                                            <th>Nama Anggota</th>
                                            <th>Nama Lomba</th>
                                            <th>Proposal</th>
                                            <th>Keterangan</th>
                                            <th>Aksi</th>
                                            <!-- <th>Keterangan</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $pengajuanlomba = $mysqli->query("SELECT * FROM tb_pengajuanlomba ");
                                            $no = 0;
                                            while( $b = $pengajuanlomba->fetch_assoc()){
                                            $no++;
                                         ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $b["nim_mhs"]; ?></td>
                                            <td><?= $b["nama_mhs"]; ?></td>
                                            <td><?= $b["dospem"]; ?></td>
                                            <td><?= $b["kategorilomba"]; ?></td>
                                            <td><?= $b["namatim"]; ?></td>
                                            <td><?= $b["namaanggota"]; ?></td>
                                            <td><?= $b["namalomba"]; ?></td>
                                            
                                            <td>
                    <a href="proposal/<?= $t['proposal']; ?>" data-lightbox="image<?= $no; ?>">
                      <img src="proposal/<?= $t['proposal']; ?>" alt="proposal" style="max-width: 100px;">
                    </a>
                  </td>
                                            <td>
                                                <?php
                                                    $keterangan = $b["keterangan"];
                                                    if ($keterangan == "Pending") {
                                                        echo '<span class="label label-warning">Pending</span>';
                                                    } elseif ($keterangan == "Diterima") {
                                                        echo '<span class="label label-success">Diterima</span>';
                                                    } elseif ($keterangan == "Ditolak") {
                                                        echo '<span class="label label-danger">Ditolak</span>';
                                                    } else {
                                                        echo $keterangan = "";
                                                        echo '<span class="label label-warning">Pending</span>';
                                                    }
                                                ?>
                                            </td>
                                           
                                            <!-- <td><img src="images/pengajuanlomba/<?= $b["gambar"]; ?>" height="100"></td> -->
                        
                                            <td>
                <a href="?page=pengajuanlomba&aksi=edit&id_pengajuan=<?= $t['id_pengajuan']; ?>" class="btn btn-success">
                  <i class="fa fa-edit"></i> Edit
                </a>
                <a href="?page=pengajuanlomba&aksi=delete&id_pengajuan=<?= $t['id_pengajuan']; ?>" class="btn btn-danger">
                  <i class="fa fa-trash"></i> Hapus
                </a>
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