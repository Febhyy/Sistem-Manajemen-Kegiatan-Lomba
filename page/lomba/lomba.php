<a href="?page=lomba&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px; " >
<i class="fa fa-plus" style="margin-right: 7px;"> </i>Tambah Data</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Informasi Lomba
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Lomba</th>
                                            <th>Tingkat Lomba</th>
                                            <th>Syarat Lomba</th>
                                            <!-- <th>Keterangan</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                        <?php
                                            $lomba = $mysqli->query("SELECT * FROM tb_lomba ");
                                            $no = 0;
                                            while( $b = $lomba->fetch_assoc()){
                                            $no++;
                                         ?>
                                        <tr>
                                            <th scope="row"><?= $no; ?></th>
                                            <td><?= $b["namalomba"]; ?></td>
                                            <td><?= $b["tingkatlomba"]; ?></td>
                                            <td><?= $b["syarat lomba"]; ?></td>
                                            
                        
                                            <!-- <td>
                <a href="?page=pengajuanlomba&aksi=edit&id_pengajuan=<?= $t['id_pengajuan']; ?>" class="btn btn-success">
                  <i class="fa fa-edit"></i> Edit
                </a>
                <a href="?page=pengajuanlomba&aksi=delete&id_pengajuan=<?= $t['id_pengajuan']; ?>" class="btn btn-danger">
                  <i class="fa fa-trash"></i> Hapus
                </a>
              </td> -->
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