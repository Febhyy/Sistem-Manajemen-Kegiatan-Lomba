
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Anggota
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>No</th>
                                            <th>NIM</th>
											<th>Nama Mahasiswa</th>
											<th>Kelas</th>
											<th>Alamat</th>
											<th>Foto</th>
                                            
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
										 	$club = $mysqli->query("SELECT * FROM tb_anggotaclub");
										 	$no = 0;
										 	while( $t = $club->fetch_assoc()){
											$no++;
										 ?>

                                    	<tr>
                                    		<th scope="row"><?= $no; ?></th>
										  	<td><?= $t["nim_mhs"]; ?></td>
										  	<td><?= $t["nama_mhs"]; ?></td>
										  	<td><?= $t["kelas_mhs"]; ?></td>
										  	<td><?= $t["alamat_mhs"]; ?></td>
											  <td>
                    <a href="foto_mhs/<?= $t['foto_mhs']; ?>" data-lightbox="image<?= $no; ?>">
                      <img src="foto_mhs/<?= $t['foto_mhs']; ?>" alt="foto_mhs" style="max-width: 100px;">
                    </a>
                  </td>
                  <td>
                <a href="?page=prestasi&aksi=edit&nim_mhs=<?= $t['nim_mhs']; ?>" class="btn btn-success">
                  <i class="fa fa-edit"></i> Edit
                </a>
                <a href="?page=prestasi&aksi=delete&nim_mhs=<?= $t['nim_mhs']; ?>" class="btn btn-danger">
                  <i class="fa fa-trash"></i> Hapus
                </a>
              </td>
				  </tr>
										  <?php } ?>
                                    	
                                    </tbody>
                                </table>
                            </div>
                            

