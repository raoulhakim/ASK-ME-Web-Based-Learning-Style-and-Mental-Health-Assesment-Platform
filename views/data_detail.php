<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM data_siswa WHERE id_siswa ='" . $_GET ['id_siswa'] . "'";
                    //proses query ke database
                    $query = mysqli_query($kon, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nama</td> <td><?= $data['Nama'] ?></td>
                        </tr>
                        <tr>
                            <td>Kelas</td> <td><?= $data['Kelas'] ?></td>
                        </tr>
                        <tr>
                            <td>Absen</td> <td><?= $data['Absen'] ?></td>
                        </tr>
						<tr>
                            <td>Tanggal Asesmen</td> <td><?= $data['Tanggal'] ?></td>
                        </tr>
                        <tr>
                            <td>Hasil Asesmen</td> <td><?= $data['Hasil_Asesmen'] ?></td>
                        </tr>
                        <tr>
                            <td>Skor Visual</td> <td><?= $data['Skor_Visual'] ?></td>
                        </tr>
                        <tr>
                            <td>Skor Auditori</td> <td><?= $data['Skor_Auditori'] ?></td>
                        </tr>
                        <tr>
                            <td>Skor Kinestetik</td> <td><?= $data['Skor_Kinestetik'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=data&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Siswa </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

