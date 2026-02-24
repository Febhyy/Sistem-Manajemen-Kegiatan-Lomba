
    
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                CLUB SISTEM INFORMASI
            </div>
            <!-- <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="panel panel-back noti-box">
                                        <span class="icon-box bg-color-green set-icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <div class="text-box">
                                            <b><?php

                                                $mahasiswa = mysqli_query($mysqli, "SELECT * FROM tb_club");

                                                $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                                                ?>
                                                <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Club Bisnis</p>
                                            </b>
                                            <a href="anggota.PHP">
                                                <p class="text-muted">
                                                    <center>Lihat Detail</center>
                                                </p>
                                            </a>
                                        </div>
                            </tr>
                            <tr>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="panel panel-back noti-box">
                                        <span class="icon-box bg-color-green set-icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <div class="text-box">
                                            <b><?php

                                                $mahasiswa = mysqli_query($mysqli, "SELECT * FROM tb_club");

                                                $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                                                ?>
                                                <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Club Bisnis</p>
                                            </b>
                                            <a href="anggota.PHP">
                                                <p class="text-muted">
                                                    <center>Lihat Detail</center>
                                                </p>
                                            </a>
                                        </div>
                            </tr>
                            <tr>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="panel panel-back noti-box">
                                        <span class="icon-box bg-color-green set-icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <div class="text-box">
                                            <b><?php

                                                $mahasiswa = mysqli_query($mysqli, "SELECT * FROM tb_club");

                                                $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                                                ?>
                                                <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Club Bisnis</p>
                                            </b>
                                            <a href="anggota.PHP">
                                                <p class="text-muted">
                                                    <center>Lihat Detail</center>
                                                </p>
                                            </a>
                                        </div>
                            </tr>
                            <tr>
                                <div class="col-md-3 col-sm-6 col-xs-6">
                                    <div class="panel panel-back noti-box">
                                        <span class="icon-box bg-color-green set-icon">
                                            <i class="fa fa-book"></i>
                                        </span>
                                        <div class="text-box">
                                            <b><?php

                                                $mahasiswa = mysqli_query($mysqli, "SELECT * FROM tb_club");

                                                $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                                                ?>
                                                <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Club Bisnis</p>
                                            </b>
                                            <a href="anggota.PHP">
                                                <p class="text-muted">
                                                    <center>Lihat Detail</center>
                                                </p>
                                            </a>
                                        </div>
                            </tr>





                            </tbody> -->
                            <!-- <!DOCTYPE html>
<html>
<head>
	<title>Tampilan 4 Klub</title> -->
	
	<div class="container">
		<div class="club">
			<h2>Klub A</h2>
			<p>Deskripsi klub A</p>
            <!-- <a href="?page=club&aksi=tambah">
			<button class="button" onclick="daftarKlub('Klub A')">Mendaftar</button></a> -->
		</div>
		<div class="club">
			<h2>Klub B</h2>
			<p>Deskripsi klub B</p>
            <!-- <a href="?page=club&aksi=tambah">
			<button class="button" onclick="daftarKlub('Klub B')">Mendaftar</button></a> -->
		</div>
		<div class="club">
			<h2>Klub C</h2>
			<p>Deskripsi klub C</p>
            <!-- <a href="?page=club&aksi=tambah">
			<button class="button" onclick="daftarKlub('Klub C')">Mendaftar</button></a> -->
		</div>
		<div class="club">
			<h2>Klub D</h2>
			<p>Deskripsi klub D</p>
            <!-- <a href="?page=club&aksi=tambah">
			<button class="button" onclick="daftarKlub('Klub D')">Mendaftar</button></a> -->
		</div>
	</div>

	<!-- <div>
		<h3>Tambah Klub Baru</h3>
		<form id="formTambahKlub">
			<label for="namaKlub">Nama Klub:</label>
			<input type="text" id="namaKlub" required>
			<button type="submit">Tambah</button>
		</form>
	</div> -->

	<!-- <script>
		// Daftar klub
		const daftarKlub = (nama) => {
			// Tindakan saat mendaftar ke klub
			console.log(`Mendaftar ke ${nama}`);
		}

		// Tambah klub baru
		const formTambahKlub = document.getElementById('formTambahKlub');
		formTambahKlub.addEventListener('submit', (e) => {
			e.preventDefault();
			const namaKlub = document.getElementById('namaKlub').value;
			const klubBaru = document.createElement('div');
			klubBaru.classList.add('club');
			klubBaru.innerHTML = `
				<h2>${namaKlub}</h2>
				<p>Deskripsi ${namaKlub}</p>
				<button class="button" onclick="daftarKlub('${namaKlub}')">Mendaftar</button>
			`;
			document.querySelector('.container').appendChild(klubBaru);
			document.getElementById('namaKlub').value = '';
		});
	</script> -->

                    </table>
                </div>

                
<!-- <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <!-- <div class="panel panel-default">
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
                            </div> -->
                             

