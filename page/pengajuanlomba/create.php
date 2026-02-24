<?php
$con = mysqli_connect("localhost", "root", "", "proyek");
$id =$_POST['id_pengajuan'];
$nim = $_POST['nim_mhs'];
$nama= $_POST['nama_mhs'];
$dosen = $_POST['dospem'];
$kategori = $_POST['kategorilomba'];
$namatim = $_POST['namatim'];
$namaanggota = $_POST['namaanggota'];
$namalomba = $_POST['namalomba'];
$propo = $_FILES['proposal']['name'];
$keterangan = $_POST['keterangan'];

if ($_POST['keterangan'] == 'null') {
    $keterangan = '';
} else {
    $keterangan = $_POST['keterangan'];
}

$mysqli = mysqli_query($con, "INSERT INTO tb_pengajuanlomba (nim_mhs, nama_mhs, dospem, kategorilomba, namatim, namaanggota, namalomba, proposal, keterangan) 
VALUES ('$nim', '$nama', '$dosen', '$kategori', '$namatim', '$namaanggota', '$namalomba', '$propo', '$keterangan')");
move_uploaded_file($_FILES['proposal']['tmp_name'], 'images/pengajuanlomba/' . $propo);
if ($mysqli) {
    header('location:?page=pengajuanlomba');
} else {
    echo 'gagal: ' . mysqli_error($con);
}
