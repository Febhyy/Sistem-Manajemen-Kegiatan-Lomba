<?php 
$con = mysqli_connect("localhost","root","","proyek");
if (isset($_POST(['tambah_anggota']))){
    $nim = $_POST['nim_mhs'];
    $nama = $_POST['namaprestasi'];
    $tingkat = $_POST['tingkatprestasi'];
    $keterangan = $_POST['keteranganprestasi'];
    $gambar = $_POST['dokumentasi'];
    $addtotable = mysqli_query($conn, "INSERT INTO tb_prestasi (nim_mhs,namaprestasi,tingkatprestasi,dokumentasi,keteranganprestasi) values('$nim','$nama','$tingkat','$gambar','$keterangan    ')");
    if ($addtotable) {
        header('location: ../transaksi/transaksi.php');
    } else {
        echo 'Gagal';
        header('location:index.php');
    }
}
?>