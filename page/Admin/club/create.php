<?php
$con = mysqli_connect("localhost","root","","proyek");
$nim = $_POST['nim_mhs'];
$nama = $_POST['nama_mhs'];
$kelas = $_POST['kelas_mhs'];
$alamat = $_POST['alamat_mhs'];
$gambar = $_POST['foto_mhs'];
		$mysqli = mysqli_query($con, "INSERT INTO tb_anggotaclub (nim_mhs,nama_mhs,kelas_mhs,alamat_mhs,foto_mhs) 
        values('$nim','$nama','$kelas','$alamat','$gambar')");
		// move_uploaded_file($_FILES['dokumentasi']['tmp_name'], 'images/anggota/'.$gambar);
		if($mysqli){
			header('location:?page=dataanggota');
		}else{
			echo 'gagal';
		}
?>