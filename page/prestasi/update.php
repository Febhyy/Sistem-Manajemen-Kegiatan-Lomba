<?php 
	$id = $_POST['id_prestasi'];
	$nim = $_POST['nim_mhs'];
$nama = $_POST['namaprestasi'];
$tingkat = $_POST['tingkatprestasi'];
$keterangan = $_POST['keteranganprestasi'];
$gambar = $_FILES['dokumentasi']['name'];
	// jika gambar tidak diganti
	if(empty($gambar)) {
		$mysqli->query("UPDATE tb_prestasi SET 
						nim_mhs 		= '$nim',
						namaprestasi 		= '$nama',
						tingkatprestasi 			= '$tingkat',
						keteranganprestasi 	= '$keterangan',
						dokumentasi 		= '$gambar'
						WHERE id_prestasi 	=$id
						");
	} else {
		$hapus = $mysqli->query("SELECT * FROM tb_prestasi WHERE namaprestasi =$nama");
		// menghapus gambar lama
		$gambar = mysqli_fetch_array($hapus);
		// nama field gambar
		$lokasi = $gambar["gambar"];
		// alamat tempat gambar
		$hapusGambar = "images/anggota/$lokasi";
		// untuk menghapus gambar dari folder
		unlink($hapusGambar);
		move_uploaded_file($_FILES['gambar']['tmp_name'], 'images/anggota/' . $gambar);
		$mysqli->query("UPDATE tb_prestasi SET
						nim_mhs 		= '$nim',
						namaprestasi 		= '$nama',
						tingkatprestasi 			= '$tingkat',
						keteranganprestasi 	= '$keterangan',
						dokumentasi 		= '$gambar'
						WHERE id_prestasi 	=$id
						");
	}
	header('location:?page=prestasi');
 ?>