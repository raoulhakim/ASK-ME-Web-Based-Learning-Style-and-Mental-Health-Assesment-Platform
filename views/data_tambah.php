<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">

                            <label for="Nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama" class="form-control" id="inputEmail3" placeholder="Nama" required>
                            </div>

                        </div>
						<div class="form-group">
                            <label for="Kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kelas" class="form-control" id="inputEmail3" placeholder="Kelas" required>
                            </div>
                        </div>
						<div class="form-group">
                            <label for="Absen" class="col-sm-3 control-label">Absen</label>
                            <div class="col-sm-9">
                                <input type="text" name="Absen" class="form-control" id="inputEmail3" placeholder="Absen" required>
                            </div>
                        </div>
						<div class="form-group">
                             <label for="Tanggal Asesmen" class="col-sm-3 control-label">Tanggal Asesmen</label>
                            <div class="col-sm-9">
                             <input type="datetime-local" name="Tanggal"  class="form-control" id="inputEmail3" placeholder="Tanggal" required>
                         </div>



                        </div>
							<div class="form-group">
                            <label for="Hasil Asesmen" class="col-sm-3 control-label">Hasil Asesmen</label>
                            <div class="col-sm-9">
                                <input type="text" name="Hasil_Asesmen" class="form-control" id="inputEmail3" placeholder="Hasil Asesmen" required>
                            </div>
                        </div>
                        
                     
							<div class="form-group">
                            <label for="Skor Visual" class="col-sm-3 control-label">Skor Visual</label>
                            <div class="col-sm-9">
                                <input type="text" name="Skor_Visual" class="form-control" id="inputEmail3" placeholder="Skor Visual" required>
                            </div>
                        </div>

                        
							<div class="form-group">
                            <label for="Skor Auditori" class="col-sm-3 control-label">Skor Auditori</label>
                            <div class="col-sm-9">
                                <input type="text" name="Skor_Auditori" class="form-control" id="inputEmail3" placeholder="Skor Auditori" required>
                            </div>
                        </div>

                        
							<div class="form-group">
                            <label for="Skor Kinestetik" class="col-sm-3 control-label">Skor Kinestetik</label>
                            <div class="col-sm-9">
                                <input type="text" name="Skor_Kinestetik" class="form-control" id="inputEmail3" placeholder="Skor Kinestetik" required>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=data&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Anak Didik
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
    $Nama=$_POST['Nama'];
    $Kelas=$_POST['Kelas'];
	$Absen=$_POST['Absen'];
    $Tanggal=$_POST['Tanggal'];
    $Hasil_Asesmen=$_POST['Hasil_Asesmen'];
    $Skor_Visual=$_POST['Skor_Visual'];
    $Skor_Auditori=$_POST['Skor_Auditori'];
    $Skor_Kinestetik=$_POST['Skor_Kinestetik'];

    //buat sql
    $sql="INSERT INTO data_siswa VALUES ('','$Nama','$Kelas','$Absen','$Tanggal','$Hasil_Asesmen','$Skor_Visual','$Skor_Auditori','$Skor_Kinestetik')";
    $query=  mysqli_query($kon, $sql) or die ("SQL Simpan Arsip Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
