<?php 
	$gambar = $_GET["dokumentasi"];
	$edit = $mysqli->query("SELECT * FROM tb_prestasi WHERE dokumentasi =$gambar");
	$e = mysqli_fetch_array($edit);
 ?>

 <div class="panel panel-default">
                        <div class="panel-heading">
                            Edit Prestasi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">	
                                	<form name="form_mahasiswa" action="?page=prestasi&aksi=update" method="post" enctype="multipart/form-data">
									<div class="form-group">
											<label for="nim_mhs">NIM</label>
											<input type="text" class="form-control" id="nim" placeholder="Input Nomor Induk Mahasiswa" name="nim_mhs" required>
										</div>

										<div class="form-group">
											<label for="namaprestasi">Nama Prestasi</label>
											<input type="text" class="form-control" id="nama" placeholder="Input Nama Prestasi" name="namaprestasi" required>
										</div>



										<div class="form-group">
											<label for="tingkatprestasi">Tingkat Prestasi</label>
												<select name="tingkatprestasi" class="form-control" id="" name="tingkatprestasi" required>
												<option value="kota">None</option>	
												<option value="kota">Kota</option>
													<option value="provinsi">Provinsi</option>
													<option value="kabupaten">Kabupaten</option>
													<option value="nasional">Nasional</option>
													<option value="internasional">Internasional</option>
												</select>
										</div>

										<div class="form-group">
											<label for="keterangan">Keterangan Prestasi</label>
											<textarea class="form-control" id="" placeholder="Keterangan" name="keteranganprestasi" required></textarea>
										</div>

										<div class="form-group">
											<label for="dokumentasi">Dokumentasi</label>
											<input type="file" class="form-control" id="gambar" name="dokumentasi" required>
										</div>

										<div class="form-group">
											<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit" class="btn btn-primary">Simpan</button>
										</div>

									 </form>