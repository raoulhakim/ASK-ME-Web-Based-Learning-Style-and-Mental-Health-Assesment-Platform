<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Siswa</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include 'koneksi.php';
        $sql = "SELECT * FROM data_siswa WHERE id_siswa='" . $_GET ['id_siswa'] . "'";
        //proses query ke database
        $query = mysqli_query($kon, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Asesmen SMPN 10 Cimahi </h2>
                        <h4>Jl. Daeng Muhammad Ardiwinata Km.2,5 RT.001 RW.011, Cibabat, Kec. Cimahi Utara, Kota Cimahi Prov. Jawa Barat </h4>
                        <hr>
                        <h3>DATA SISWA</h3>
                        <table class="table table-bordered table-striped table-hover"> 
                        <tbody>
    <tr>
        <td><strong>Nama</strong></td> <td colspan="3"><strong><?= $data['Nama'] ?></strong></td>
    </tr>
    <tr>
        <td><strong>Kelas</strong></td> <td colspan="3"><strong><?= $data['Kelas'] ?></strong></td>
    </tr>
    <tr>
        <td><strong>Absen</strong></td> <td colspan="3"><strong><?= $data['Absen'] ?></strong></td>
    </tr>
    <tr>
        <td><strong>Tanggal Asesmen</strong></td> <td colspan="3"><strong><?= $data['Tanggal'] ?></strong></td>
    </tr>
    <tr>
        <td><strong>Hasil Asesmen</strong></td> <td colspan="3"><strong><?= $data['Hasil_Asesmen'] ?></strong></td>
    </tr>
    
    <tr>
        <td><strong>Skor Visual</strong></td> <td><strong>Skor Auditori</strong></td> <td><strong>Skor Kinestetik</strong></td>
    </tr>
    <tr>
        <td><?= $data['Skor_Visual'] ?></td> <td><?= $data['Skor_Auditori'] ?></td> <td><?= $data['Skor_Kinestetik'] ?></td>
    </tr>
</tbody>

                            <tfoot> 
                                <tr>
                                    <td colspan="3" class="text-right">
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