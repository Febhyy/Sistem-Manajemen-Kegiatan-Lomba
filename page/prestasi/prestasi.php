<a href="?page=prestasi&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px; " >
<i class="fa fa-plus" style="margin-right: 7px;"> </i>Tambah Data</a>
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel prestasi
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>No</th>
                       <th>NIM</th>
											<th>Nama prestasi</th>
											<th>Tingkat prestasi</th>
											<th>Keterangan prestasi</th>
											<th>Gambar</th>
                      <th>Aksi</th>
											
                                        </tr>
                                    </thead>
                                    <tbody>
                                    	
                                    	<?php
										 	$prestasi = $mysqli->query("SELECT * FROM tb_prestasi");
										 	$no = 0;
										 	while( $t = $prestasi->fetch_assoc()){
											$no++;
										 ?>

                                    	<tr>
                                    		<th scope="row"><?= $no; ?></th>
										  	<td><?= $t["nim_mhs"]; ?></td>
										  	<td><?= $t["namaprestasi"]; ?></td>
										  	<td><?= $t["tingkatprestasi"]; ?></td>
										  	<td><?= $t["keteranganprestasi"]; ?></td>
											  <td>
                    <a href="dokumentasi/<?= $t['dokumentasi']; ?>" data-lightbox="image<?= $no; ?>">
                      <img src="dokumentasi/<?= $t['dokumentasi']; ?>" alt="dokumentasi" style="max-width: 100px;">
                    </a>
                  </td>
                  <td>
                <a href="?page=prestasi&aksi=edit&id_prestasi=<?= $t['id_prestasi']; ?>" class="btn btn-success">
                  <i class="fa fa-edit"></i> Edit
                </a>
                <a href="?page=prestasi&aksi=delete&id_prestasi=<?= $t['id_prestasi']; ?>" class="btn btn-danger">
                  <i class="fa fa-trash"></i> Hapus
                </a>
              </td>
				  </tr>
										  <?php } ?>
                                    	
                                    </tbody>
                                </table>
                            </div>
                            

