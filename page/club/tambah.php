
<div class="panel panel-default">
                        <div class="panel-heading">
                            Daftar Anggota CLub
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
									<form name="form_anggota" action="?page=club&aksi=create" method="post" enctype="multipart/form-data">
										
										<div class="form-group">
											<label for="nim_mhs">NIM</label>
											<input type="text" class="form-control" id="nim" placeholder="Input Nomor Induk Mahasiswa" name="nim_mhs" required>
										</div>

										<div class="form-group">
											<label for="nama_mhs">Nama Mahasiswa</label>
											<input type="text" class="form-control" id="nama" placeholder="Input Nama Mahasiswa" name="nama_mhs" required>
										</div>
                                        <div class="form-group">
											<label for="kelas_mhs">Kelas</label>
											<input type="text" class="form-control" id="kelas" placeholder="Input Kelas Mahasiswa" name="kelas_mhs" required>
										</div>

                                
                                        <div class="form-group">
											<label for="alamat_mhs">Alamat</label>
											<input type="text" class="form-control" id="alamat" placeholder="Input alamat Mahasiswa" name="alamat_mhs" required>
										</div>

										<div class="form-group">
											<label for="foto_mhs">FOTO</label>
											<input type="file" class="form-control" id="gambar" name="foto_mhs" required>
										</div>

										<div class="form-group">
											<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit"  class="btn btn-primary">Simpan</button>
										</div>

									</form>