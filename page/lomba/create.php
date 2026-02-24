<?php
$con = mysqli_connect("localhost","root","","proyek");
$id = $_POST['id_lomba'];
$nama = $_POST['namalomba'];
$tingkat = $_POST['tingkatlomba'];
$syarat = $_POST['syarat lomba'];
		$mysqli = mysqli_query($con, "INSERT INTO tb_lomba (id_lomba,namalomba,tingkatlomba,syarat lomba) 
        values('$id','$nama','$tingkat','$syarat')");
		// move_uploaded_file($_FILES['dokumentasi']['tmp_name'], 'images/anggota/'.$gambar);
		if($mysqli){
			header('location:?page=lomba');
		}else{
			echo 'gagal';
		}
?>