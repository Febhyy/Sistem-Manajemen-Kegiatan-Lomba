<?php 
	$id = $_GET["id_pengajuan"];
	$hapus = $mysqli->query("SELECT * FROM tb_pengajuanlomba WHERE id_pengajuan ='$_GET[id_pengajuan]'");
	// memilih gambar untuk dihapus
	$id = mysqli_fetch_array($hapus);
	// gambar field gambar
	$lokasi = $id["id_pengajuan"];
	// alamat tempat gambar
	$hapusid = "images/pengajuanlomba/$lokasi";
	// untuk menghapus gambar dari folder
	unlink($hapusid);
	$mysqli->query("DELETE FROM tb_pengajuanlomba WHERE id_pengajuan ='$_GET[id_pengajuan]'");
	header('location:?page=pengajuanlomba	');

 ?>
 