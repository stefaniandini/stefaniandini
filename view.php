<?php
// Panggil file koneksi
include 'koneksi.php';

// Query untuk mengambil data dari tb_mahasiswa
$query = "SELECT * FROM portofolio";
$result = mysqli_query($koneksi, $query);



// Cek apakah data ditemukan
if (mysqli_num_rows($result) > 0) {
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>id_portofolio</th><th>nama_kegiatan</th><th>waktu_kegiatan</th>";
    
    $no = 1;
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['id_portofolio'] . "</td>";
        echo "<td>" . $row['nama_kegiatan'] . "</td>";
        echo "<td>" . $row['waktu_kegiatan'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Tidak ada data mahasiswa.";
}
?>
