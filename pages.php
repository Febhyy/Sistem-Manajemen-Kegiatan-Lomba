<?php

// Report all errors except E_NOTICE
error_reporting(error_reporting() & ~E_NOTICE);
//error_reporting(level);
include "koneksi.php";
//include 'filename';

$page = isset($_GET['page']) ? $_GET['page'] : "";
$aksi = isset($_GET['aksi']) ? $_GET['aksi'] : "";

if ($page == "pengajuanlomba") {
    if ($aksi == "") {
        include "page/pengajuanlomba/pengajuanlomba.php";
    } elseif ($aksi == "tambah") {
        include "page/pengajuanlomba/tambah.php";
    } elseif ($aksi == "create") {
        include "page/pengajuanlomba/create.php";
    } elseif ($aksi == "delete") {
        include "page/pengajuanlomba/delete.php";
    } elseif ($aksi == "edit") {
        include "page/pengajuanlomba/edit.php";
    } elseif ($aksi == "update") {
        include "page/pengajuanlomba/update.php";
    }
} elseif ($page == "club") {
    if ($aksi == "") {
        include "page/club/club.php";
    } elseif ($aksi == "tambah") {
        include "page/club/tambah.php";
    } elseif ($aksi == "create") {
        include "page/club/create.php";
    } elseif ($aksi == "delete") {
        include "page/club/delete.php";
    } elseif ($aksi == "edit") {
        include "page/club/edit.php";
    } elseif ($aksi == "update") {
        include "page/club/update.php";
    } elseif ($aksi == "details") {
        include "page/club/details.php";
    }elseif ($aksi == "tambahclub") {
        include "page/club/tambahclub.php";
    }elseif ($aksi == "createclub") {
        include "page/club/createclub.php";
    }elseif ($aksi == "dataangota") {
        include "page/club/dataangota.php";
    }
} elseif ($page == "lomba") {
    if ($aksi == "") {
        include "page/lomba/lomba.php";
    } elseif ($aksi == "tambah") {
        include "page/lomba/tambah.php";
    } elseif ($aksi == "create") {
        include "page/lomba/create.php";
    } elseif ($aksi == "delete") {
        include "page/lomba/delete.php";
    } elseif ($aksi == "edit") {
        include "page/lomba/edit.php";
    } elseif ($aksi == "update") {
        include "page/lomba/update.php";
    } elseif ($aksi == "details") {
        include "page/lomba/details.php";
    }elseif ($aksi == "tambahlomba") {
        include "page/lomba/tambahlomba.php";
    }elseif ($aksi == "createlomba") {
        include "page/lomba/createlomba.php";
    }elseif ($aksi == "dataangota") {
        include "page/lomba/dataangota.php";
    }
} elseif ($page == "prestasi") {
    if ($aksi == "") {
        include "page/prestasi/prestasi.php";
    } elseif ($aksi == "tambah") {
        include "page/prestasi/tambah.php";
    } elseif ($aksi == "create") {
        include "page/prestasi/create.php";
    } elseif ($aksi == "delete") {
        include "page/prestasi/delete.php";
    } elseif ($aksi == "edit") {
        include "page/prestasi/edit.php";
    } elseif ($aksi == "update") {
        include "page/prestasi/update.php";
    } elseif ($aksi == "details") {
        include "page/prestasi/details.php";
    }
} elseif ($page == "Admin"){
    if($aksi == ""){
        include "page/Admin/pengajuan.php";
    }
}elseif ($page == "Kemahasiswaan"){
    if($aksi == ""){
        include "page/Kemahasiswaan/kemahasiswaan.php";
    }
}
elseif ($page == "") {
    include "home.php";
}
