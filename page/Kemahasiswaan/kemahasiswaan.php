
    
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
            
		</div>
		<div class="club">
			<h2>Klub B</h2>
			<p>Deskripsi klub B</p>
			
		</div>
		<div class="club">
			<h2>Klub C</h2>
			<p>Deskripsi klub C</p>
			
		</div>
		<div class="club">
			<h2>Klub D</h2>
			<p>Deskripsi klub D</p>
			
		</div>
	</div>

	

	<script>
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
	</script>

                    </table>
                </div>