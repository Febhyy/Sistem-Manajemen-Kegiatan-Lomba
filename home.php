<?php

session_start();
error_reporting(0);
if (isset($_SESSION["login"])) {
    header('location: login.php');
    exit;
}

?>

<marquee>
    <H1>Selamat Datang di Halaman Utama PSSI</H1>
</marquee>
<!-- /. NAV SIDE  -->



<div id="page-inner">
    <div class="row">
        <div class="col-md-12">

            <h1 style="font-family:fantasy">DASHBOARD</h1>
        </div>
    </div>
    </style>
    </head>
    <div class="w3-content" style="max-width:400px">


        <img class="mySlides" src="sld1.jpg" style="width:300%">

        <img class="mySlides" src="sld2.jpg" style="width:300%">
        <img class="mySlides" src="sld3.png" style="width:300%">
    </div>

    <script>
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > x.length) {
                slideIndex = 1
            }
            x[slideIndex - 1].style.display = "block";
            setTimeout(carousel, 2000);
        }
    </script>

    </body>
    <!-- /. ROW  -->
    <hr />
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-red set-icon">
                    <i class="fa fa-users"></i>
                </span>
                <div class="text-box">
                    <b><?php

                        $mahasiswa = mysqli_query($mysqli, "SELECT * FROM tb_club");

                        $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                        ?>
                        <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Club</p>
                    </b>
                    <a href="?page=club">
                        <p class="text-muted">
                            <center>Lihat Detail</center>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-green set-icon">
                    <i class="fa fa-book"></i>
                </span>
                <div class="text-box">
                    <b><?php

                        $mahasiswa = mysqli_query($mysqli, "SELECT * FROM tb_pengajuanlomba");

                        $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                        ?>
                        <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Lomba</p>
                    </b>
                    <a href="?page=lomba">
                        <p class="text-muted">
                            <center>Lihat Detail</center>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-blue set-icon">
                    <i class="fa fa-database"></i>
                </span>
                <div class="text-box">
                    <b><?php

                        $mahasiswa = mysqli_query($mysqli, "SELECT * FROM tb_prestasi");

                        $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                        ?>
                        <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> Prestasi</p>
                    </b>
                    <a href="?page=prestasi">
                        <p class="text-muted">
                            <center>Lihat Detail</center>
                        </p>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-sm-6 col-xs-6">
            <div class="panel panel-back noti-box">
                <span class="icon-box bg-color-brown set-icon">
                    <i class="fa fa-user"></i>
                </span>
                <div class="text-box">
                    <b><?php

                        $mahasiswa = mysqli_query($mysqli, "SELECT * FROM tb_user");

                        $jumlah_mahasiswa = mysqli_num_rows($mahasiswa);

                        ?>
                        <p style="font-size: 20px;"><?php echo $jumlah_mahasiswa; ?> User</p>
                    </b>
                    <p class="text-muted">
                        <center>Lihat Detail</center>
                    </p>
                </div>
            </div>
        </div>
    </div>



    <div class="col-md-4 col-sm-4">
        <div class="panel panel-success">
        </div>
    </div>
</div>
</div>
<div class="col-md-4 col-sm-4">
    <div class="panel panel-success">
        <div class="panel-heading">

        </div>
        <div class="panel-body">
            <p>
                <center>Selamat datang di PSSI <br>
                    Sebuah Sistem struktur regulasi kegiatan lomba agar lebih efektif dan efisien
            </p>
            </center>
        </div>
        <div class="panel-footer">
            Introduction
        </div>
    </div>
</div>
</div>

<?php include "koneksi.php"; ?>