<a href="?page=anggota&aksi=tambah" class="btn btn-primary" style="margin-bottom: 10px;">
    <i class="fa fa-plus" style="margin-right: 7px;"></i>Tambah Data
</a>
<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                Tabel Prestasi
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>NIM</th>
                                <th>Nama Prestasi</th>
                                <th>Tingkat Prestasi</th>
                                <th>Keterangan Prestasi</th>
                                <th>Gambar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $prestasi = $mysqli->query("SELECT * FROM tb_prestasi");
                            $no = 0;
                            while ($p = $prestasi->fetch_assoc()) {
                                $no++;
                            ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $p["nim_mhs"]; ?></td>
                                    <td><?= $p["namaprestasi"]; ?></td>
                                    <td><?= $p["tingkatprestasi"]; ?></td>
                                    <td><?= $p["keteranganprestasi"]; ?></td>
                                    <td><?= $p["dokumentasi"]; ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
 