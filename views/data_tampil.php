

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title"><span class="fa fa-user-plus"></span> Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <table id="dtskripsi" class="table table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                            <th><center>No.</center></th><th width="18%"><center>Nama</center></th><th><center>Kelas</center></th><th ><center>Absen</center></th><th width="15%"><center>Tanggal Asesmen</center></th><th width="10%"><center>Hasil Asesmen</center></th><th><center>Skor Visual</center></th><th><center>Skor Auditori</center></th><th><center>Skor Kinestetik</center></th><th><center>ACTIONS</center></th>
                                </tr>
                            </tr>
                        </thead>
                        <tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            include "koneksi.php";
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
                                        <a href="?page=data&actions=detail&id_siswa=<?= $data['id_siswa'] ?>" class="btn btn-info btn-xs">
                                            <span class="fa fa-eye"></span>
                                        </a>
                                        <a href="?page=data&actions=edit&id_siswa=<?= $data['id_siswa'] ?>" class="btn btn-warning btn-xs">
                                            <span class="fa fa-edit"></span>
                                        </a>
                                        <a href="?page=data&actions=delete&id_siswa=<?= $data['id_siswa'] ?>" class="btn btn-danger btn-xs">
                                            <span class="fa fa-remove"></span>
                                        </a>
                                    </td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td colspan="7">
                                    <a href="?page=data&actions=tambah" class="btn btn-info btn-sm">
                                        Tambah Data

                                    </a>
                                </td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>

        </div>
    </div>
</div>

