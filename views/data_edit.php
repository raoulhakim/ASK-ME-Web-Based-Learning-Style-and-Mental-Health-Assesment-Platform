<?php
$id=$_GET['id_siswa'];
$ambil=  mysqli_query($kon, "SELECT * FROM data_siswa WHERE id_siswa ='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Update Data Siswa</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                        <div class="form-group">

                            <label for="Nama" class="col-sm-3 control-label">Nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nama" value="<?=$data['Nama']?>"class="form-control" id="inputEmail3" placeholder="Nama">
                            </div>

                        </div>
						<div class="form-group">
                            <label for="Kelas" class="col-sm-3 control-label">Kelas</label>
                            <div class="col-sm-9">
                                <input type="text" name="Kelas" value="<?=$data['Kelas']?>"class="form-control" id="inputEmail3" placeholder="Kelas">
                            </div>
                        </div>
						<div class="form-group">
                            <label for="Absen" class="col-sm-3 control-label">Absen</label>
                            <div class="col-sm-9">
                                <input type="text" name="Absen" value="<?=$data['Absen']?>"class="form-control" id="inputEmail3" placeholder="Absen">
                            </div>
                        </div>
						<div class="form-group">
                             <label for="Tanggal Asesmen" class="col-sm-3 control-label">Tanggal Asesmen</label>
                            <div class="col-sm-9">
                             <input type="datetime-local" name="Tanggal" value="<?=$data['Tanggal']?>" class="form-control" id="inputEmail3" placeholder="Tanggal">
                         </div>



                        </div>
							<div class="form-group">
                            <label for="Hasil Asesmen" class="col-sm-3 control-label">Hasil Asesmen</label>
                            <div class="col-sm-9">
                                <input type="text" name="Hasil_Asesmen" value="<?=$data['Hasil_Asesmen']?>"class="form-control" id="inputEmail3" placeholder="Hasil_Asesmen" readonly>
                            </div>
                        </div>
                        
                     
							<div class="form-group">
                            <label for="Skor Visual" class="col-sm-3 control-label">Skor Visual</label>
                            <div class="col-sm-9">
                                <input type="text" name="Skor_Visual" value="<?=$data['Skor_Visual']?>"class="form-control" id="inputEmail3" placeholder="Skor_Visual" readonly>
                            </div>
                        </div>

                        
							<div class="form-group">
                            <label for="Skor Auditori" class="col-sm-3 control-label">Skor Auditori</label>
                            <div class="col-sm-9">
                                <input type="text" name="Skor_Auditori" value="<?=$data['Skor_Auditori']?>"class="form-control" id="inputEmail3" placeholder="Skor_Auditori" readonly>
                            </div>
                        </div>

                        
							<div class="form-group">
                            <label for="Skor Kinestetik" class="col-sm-3 control-label">Skor Kinestetik</label>
                            <div class="col-sm-9">
                                <input type="text" name="Skor_Kinestetik" value="<?=$data['Skor_Kinestetik']?>"class="form-control" id="inputEmail3" placeholder="Skor_Kinestetik" readonly>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-edit"></span> Update Data Siswa</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=data&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Siswa
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
	
    //buat sql
    $sql="UPDATE data_siswa SET Nama='$Nama',Kelas='$Kelas',Absen='$Absen',Tanggal='$Tanggal' WHERE id_siswa ='$id'"; 
    $query=  mysqli_query($kon, $sql) or die ("SQL Edit MHS Error");
    if ($query){
        echo "<script>window.location.assign('?page=data&actions=tampil');</script>";
    }else{
        echo "<script>alert('Edit Data Gagal');<script>";
    }
    }

?>



