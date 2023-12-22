<?php
//membuat query untuk hapus data
$sql="DELETE FROM data_siswa WHERE id_siswa ='".$_GET['id_siswa']."'";
$query=mysqli_query($kon, $sql) or die ("SQL Hapus Error");
if($query){
    echo"<script> window.location.assign('?page=data&actions=tampil');</script>";
}else{
    echo"<script> alert ('Maaf !!! Data Tidak Berhasil Dihapus') window.location.assign('?page=guru&actions=tampil');</scripr>";
}

