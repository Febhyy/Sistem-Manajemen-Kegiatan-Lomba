<?php 
	$id = $_GET["id"];
	$hapus = $mysqli->query("SELECT * FROM tb_anggotaclub WHERE id ='$_GET[id]'");
	// memilih gambar untuk dihapus
	$nim_mhs = mysqli_fetch_array($hapus);
	// nama field gambar
	$lokasi = $nim_mhs["NIM"];
	// alamat tempat gambar
	$hapusNIM = "images/anggota/$lokasi";
	// untuk menghapus gambar dari folder
	unlink($hapusNIM);
	$mysqli->query("DELETE FROM tb_anggotaclub WHERE id ='$_GET[id]'");
	header('location:?page=club');

 ?>
 