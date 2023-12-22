    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title"><span class="fa fa-user-plus"></span> Laporan Data Siswa</h3>
                    </div>
                    <div class="panel-body">
                        <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th><center>No.</center></th><th width="18%"><center>Nama</center></th><th><center>Kelas</center></th><th width="14%"><center>Absen</center></th><th width="15%"><center>Tanggal Asesmen</center></th><th width="10%"><center>Hasil Asesmen</center></th><th><center>Skor Visual</center></th><th><center>Skor Auditori</center></th><th><center>Skor Kinestetik</center></th><th><center>AKSI</center></th>
                                </tr>
                            </thead>
                            <tbody>
                                <!--ambil data dari database, dan tampilkan kedalam tabel-->
                                <?php
                                //buat sql untuk tampilan data, gunakan kata kunci select
                                $sql = "SELECT * FROM data_siswa";
                                $query = mysqli_query($kon, $sql) or die("SQL Anda Salah");
                                //Baca hasil query dari databse, gunakan perulangan untuk
                                //Menampilkan data lebh dari satu. disini akan digunakan
                                //while dan fungdi mysqli_fecth_array
                                //Membuat variabel untuk menampilkan nomor urut
                                $nomor = 0;
                                //Melakukan perulangan u/menampilkan data
                                while ($data = mysqli_fetch_array($query)) {
                                    $nomor++; //Penambahan satu untuk nilai var nomor
                                    ?>
                                    <tr>
                                    
                                        <td><?= $nomor ?></td>
                                        <td><?= $data['Nama'] ?></td>
                                        <td><?= $data['Kelas'] ?></td>
                                        <td><?= $data['Absen'] ?></td>
                                        <td><?= $data['Tanggal'] ?></td>
                                        <td><?= $data['Hasil_Asesmen'] ?></td>
                                        <td><?= $data['Skor_Visual'] ?></td>
                                        <td><?= $data['Skor_Auditori'] ?></td>
                                        <td><?= $data['Skor_Kinestetik'] ?></td>
                                        <td>
                                            <a href="report/data_satu.php?id_siswa=<?= $data['id_siswa'] ?>" target="_blank" class="btn btn-info btn-xs">
                                                <span class="fa fa-print"></span>
                                            </a>

                                        </td>
                                    </tr>
                                    <!--Tutup Perulangan data-->
                                    
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <td colspan="10">
                                        <div class="text-right">
                                            
                                            <a href="report/data_semua.php" target="_blank" class="btn btn-info btn-sm">
                                                <span class="fa fa-print"></span> Cetak Semua Data
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            </tfoot>

                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>
