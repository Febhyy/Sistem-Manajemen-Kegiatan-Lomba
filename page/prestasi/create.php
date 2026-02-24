<?php
$con = mysqli_connect("localhost","root","","proyek");
$id = $_POST['id_prestasi'];
$nim = $_POST['nim_mhs'];
$nama = $_POST['namaprestasi'];
$tingkat = $_POST['tingkatprestasi'];
$keterangan = $_POST['keteranganprestasi'];
$gambar = $_FILES['dokumentasi'];
		$mysqli = mysqli_query($con, "INSERT INTO tb_prestasi (nim_mhs,namaprestasi,tingkatprestasi,keteranganprestasi,dokumentasi) 
		values('$nim','$nama','$tingkat','$keterangan','$gambar')");
		move_uploaded_file($_FILES['dokumentasi']['tmp_name'], 'images/prestasi/'.$gambar);
		if($mysqli){
			header('location:?page=prestasi');
		}else{
			echo 'gagal';
		}
?>