<?php
include 'koneksi.php';

// Ambil data dari database
$query = "SELECT * FROM portofolio";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die ("Query error: " .
    mysqli_error($koneksi));
}

$no = 1;
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hapus Data</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 100%; margin-top: 20px; }
        th, td { border: 1px solid #ddd; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
        tr:nth-child(even) { background-color: #f9f9f9; }
        .btn { padding: 5px 10px; cursor: pointer; text-decoration: none; display: inline-block; }
        .btn-danger { background-color: #f44336; color: white; border: none; }
        .btn-danger:hover { background-color: #d32f2f; }
        .btn-primary { background-color: #4CAF50; color: white; border: none; }
        .btn-primary:hover { background-color: #45a049; }
        .form-group { margin-bottom: 15px; }
        .form-control { width: 100%; padding: 8px; box-sizing: border-box; }
    </style>
</head>
<body>
    <h2>Portofolio</h2>
        <!-- Form Tambah Data -->
    <h3>Tambah Data</h3>
    <form action="tambah.php" method="POST">
        <div class="form-group">
            <label>id_portofolio:</label>
            <input type="number" name="id_portofolio" class="form-control" required>
        </div>
        <div class="form-group">
            <label>nama_kegiatan:</label>
            <input type="text" name="nama_kegiatan" class="form-control" required>
        </div>
        <div class="form-group">
            <label>waktu_kegiatan:</label>
            <textarea name="waktu_kegiatan" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
    <table>
        <tr>
            <th>id_portofolio</th>
            <th>nama_kegiatan</th>
            <th>waktu_kegiatan</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <tr>
            <td><?php echo $row['id_portofolio']; ?></td>
            <td><?php echo $row['nama_kegiatan']; ?></td>
            <td><?php echo $row['waktu_kegiatan']; ?></td>
            <td>
                <a href="hapus.php?id_portofolio=<?php echo $row['id_portofolio']; ?>" 
                   class="delete-btn" 
                   onclick="return confirm('Yakin ingin menghapus data ini?')">
                    Hapus
                </a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>