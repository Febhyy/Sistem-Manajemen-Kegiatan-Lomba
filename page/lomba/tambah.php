
<div class="panel panel-default">
                        <div class="panel-heading">
                        Informasi Lomba
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
									<form name="form_anggota" action="?page=lomba&aksi=create" method="post" enctype="multipart/form-data">
										
										<div class="form-group">
											<label for="namalomba">Nama Lomba</label>
											<input type="text" class="form-control" id="nim" placeholder="Inputkan Nama Lomba" name="namalomba" required>
										</div>

										<div class="form-group">
											<label for="tingkatlomba">Tingkat Lomba</label>
											<input type="text" class="form-control" id="nama" placeholder="Input Tingkat Lomba" name="tingkatlomba" required>
										</div>
                                        <div class="form-group">
											<label for="syarat lomba">Syarat Lomba</label>
											<input type="text" class="form-control" id="kelas" placeholder="Input Syarat Lomba" name="syarat lomba" required>
										</div>


										<div class="form-group">
											<button type="reset" class="btn btn-danger">Reset</button>
											<button type="submit"  class="btn btn-primary">Simpan</button>
										</div>

									</form>