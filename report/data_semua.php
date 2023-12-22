<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Semua Data Siswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include 'koneksi.php';
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Asesmen SMPN 10 Cimahi </h2>
                        <h4>Jl. Daeng Muhammad Ardiwinata Km.2,5 RT.001 RW.011, Cibabat, Kec. Cimahi Utara, Kota Cimahi Prov. Jawa Barat </h4>
                        <hr>
                        <h3>SELURUH DATA SISWA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
                                <thead>
								<tr>
                                
									<th><center>No.</center></th><th width="18%"><center>Nama</center></th><th><center>Kelas</center></th><th width="14%"><center>Absen</center></th><th width="15%"><center>Tanggal Asesmen</center></th><th width="10%"><center>Hasil Asesmen</center></th><th><center>Skor Visual</center></th><th><center>Skor Auditori</center></th><th><center>Skor Kinestetik</center></th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            
                            $sql = "SELECT * FROM data_siswa ";
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
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="8" class="text-right">
                                        Cimahi  <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>Guru Bimbingan Konseling<strong></u><br>
                                        NIP.-
									</td>
								</tr>
							</tfoot> 
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>