<?php
// Cek apakah ada data yang terpilih
        include 'koneksi.php';
        

if (isset($_POST['tampil']) && !empty($_POST['tampil'])) {
    // Ambil data terpilih
    $data_terpilih = $_POST['tampil'];

    // Query SQL untuk mendapatkan data siswa yang terpilih
    $id_siswa = implode(',', $data_terpilih);
    $sql = "SELECT * FROM data_siswa WHERE id_siswa IN ($id_siswa)";
    $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");

    // Mulai cetak
    echo '<h2>Data Siswa Terpilih</h2>';

    while ($data = mysqli_fetch_array($query)) {
        echo '<h3>Nama: ' . $data['Nama'] . '</h3>';
        echo '<p>Kelas: ' . $data['Kelas'] . '</p>';
        echo '<p>Absen: ' . $data['Absen'] . '</p>';
        echo '<p>Tanggal Asesmen: ' . $data['Tanggal'] . '</p>';
        echo '<p>Hasil Asesmen: ' . $data['Hasil_Asesmen'] . '</p>';
        echo '<p>Skor Visual: ' . $data['Skor_Visual'] . '</p>';
        echo '<p>Skor Auditori: ' . $data['Skor_Auditori'] . '</p>';
        echo '<p>Skor Kinestetik: ' . $data['Skor_Kinestetik'] . '</p>';
        echo '<hr>';
    }
} else {
    echo '<h2>Tidak Ada Data yang Dipilih</h2>';
}
?>