<div class="panel panel-default">
	<div class="panel-heading">
		Tambah Pengajuan Lomba
	</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-md-12">
				<form name="form_buku" action="?page=pengajuanlomba&aksi=create" method="POST" enctype="multipart/form-data">
					<div class="form-group">
						<label for="nim_mhs">NIM</label>
						<input type="text" class="form-control" placeholder="Masukkan NIM" name="nim_mhs" required>
					</div>

					<div class="form-group">
						<label for="nama_mhs">Nama Pengaju</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama Pengaju" name="nama_mhs" required>
					</div>
					
					<div class="form-group">
						<label for="dospem">Nama Dosen Pembimbing</label>
						<input type="text" class="form-control" placeholder="Masukkan Nama Dosen Pembimbing" name="dospem" required>
					</div>

					<div class="form-group">
						<label for="kategorilomba">Kategori (Individu / Tim)</label>
						<input type="text" class="form-control" placeholder="Masukkan nama tim" name="kategorilomba">
					</div>
					
					<div class="form-group">
						<label for="namatim">Nama Tim (Jika mendaftar tim)</label>
						<input type="text" class="form-control" placeholder="Masukkan nama tim" name="namatim">
					</div>
					
					<div class="form-group">
						<label for="namaanggota">Nama Anggota (Jika mendaftar tim)</label>
						<input type="text" class="form-control" placeholder="Masukkan nama anggota" name="namaanggota">
					</div>
					
					<div class="form-group">
						<label for="namalomba">Nama Lomba</label>
						<input type="text" class="form-control" placeholder="Masukkan nama lomba" name="namalomba" required>
					</div>
					
					<div class="form-group">
						<label for="proposal">Proposal</label>
						<input type="file" class="form-control" name="proposal" required>
					</div>
					
					<!-- <div class="form-group">
						<input type="hidden" class="form-control" name="keterangan" value="null">
					</div> -->
					
					
					<div class="form-group">
						<button type="reset" class="btn btn-danger">Reset</button>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</div>

				</form>
			</div>
		</div>
	</div>
</div>
