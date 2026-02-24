<?php 
	$id = $_GET["id_prestasi"];
	$hapus = $mysqli->query("SELECT * FROM tb_prestasi WHERE id_prestasi ='$_GET[id_prestasi]'");
	// memilih gambar untuk dihapus
	$id = mysqli_fetch_array($hapus);
	// gambar field gambar
	$lokasi = $id["id_prestasi"];
	// alamat tempat gambar
	$hapusid = "images/club/$lokasi";
	// untuk menghapus gambar dari folder
	unlink($hapus);
	$mysqli->query("DELETE FROM tb_prestasi WHERE id_prestasi ='$_GET[id_prestasi]'");
	header('location:?page=prestasi	');

 ?>
 