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
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Stefani Andini</title>
    <link rel="stylesheet" href="stylee.css">
</head>

<body>
    <header>
        <nav>
            <a href="#">Beranda</a>
            <a href="#tentang">Tentang Saya</a>
            <a href="#portfolio">Portfolio</a>
            <div class="dropdown">
                <a href="#">Lainnya</a>
                <div class="dropdown-content">
                    <a href="https://www.instagram.com/stefaniandinii?igsh=MW1oN2FvZ2JoczZjaQ==">Instagram</a>
                    <a href="https://www.facebook.com/share/1bCypBp8kv/">Facebook</a>
                    <a href="https://www.tiktok.com/@stefaniandinii?_t=ZS-8vnh6uvuu5X&_r=1">TikTok</a>
                </div>
            </div>
        </nav>
    </header>

    <section class="intro">
        <div>
            <img src="gambar1.png" height="250px " width="300px">
        </div>
        <div>
            <h1>Halo, Saya Stefani Andini Pramudyawati</h1>
            <p>Saya ingin bekerja sebagai Hospital Healt IT</p>
        </div>
    </section>

    <section class="center-text">
        <h2 class="teks-garis">Tentang Saya</h2>
    </section>
    <section class="tentang-saya">
        <p class="kalimat">Nama saya Stefani Andini Pramudyawati. Saat ini saya sedang menempuh pendidikan di
            Universitas Nahdlatul Ulama Sunan
            Giri Bojonegoro. Saya berada di semester 2 jurusan Teknik Informatika, Fakultas Sains dan Teknologi. Dunia
            teknologi dan
            kesehatan menjadi bidang yang sangat menarik bagi saya. Sebelumnya, saat SMK, saya mengambil jurusan
            Keperawatan.
            Pengalaman tersebut membuat saya semakin memahami pentingnya teknologi dalam mendukung pelayanan kesehatan.
            Karena itu,
            saya memiliki minat yang besar di bidang Health IT. Saya bercita-cita untuk bekerja di rumah sakit sebagai
            bagian dari
            tim pengelola Sistem Informasi Rumah Sakit (SIRS). Saya ingin berkontribusi dalam meningkatkan efisiensi
            pelayanan
            kesehatan melalui sistem informasi yang handal. Kedisiplinan dan ketelitian yang saya pelajari saat di
            keperawatan
            sangat membantu saya dalam dunia teknologi. Saya percaya bahwa kombinasi ilmu keperawatan dan teknik
            informatika dapat
            menciptakan solusi terbaik di bidang kesehatan. Dengan tekad dan semangat belajar, saya berusaha
            mempersiapkan diri sebaik mungkin untuk karier masa depan saya. Saya
            yakin bahwa kerja keras dan doa akan membawa saya meraih impian tersebut.</p>
        </div>
        <div><img src="gambar2.png" alt="Foto Stefani" height="250px " width="300px" /></div>
    </section>

    <section class="center-text">
        <h2 class="teks-garis">Portofolio</h2>
    </section>
    <section class="portfolio">
        <div class="edit">
        <a href="data.php" target="_self">Tambah Data</a>
    </div>
        <div class="tabel-container">
            <table>
                <thead>
                    <tr>
                        <th>ID Portofolio</th>
                        <th>Nama Kegiatan</th>
                        <th>Waktu Kegiatan</th>
                    </tr>
                </thead>
                    <tbody>
<?php
$no = 1;
while ($row = mysqli_fetch_assoc($result)):
?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= htmlspecialchars($row['nama_kegiatan']); ?></td>
        <td><?= htmlspecialchars($row['waktu_kegiatan']); ?></td>
    </tr>
<?php endwhile; ?>
</tbody>
            </table>
        </div>
    </section>

    <section class="center-text">
        <h2 class="teks-garis">Opini</h2>
    </section>
    <section class="opini">
        <div class="card"><img src="opini3.jpg" alt="" width="230">
            <p><a
                    href="https://www.bing.com/search?pglt=2339&q=pemrograman+back+end+front+end&cvid=d7e7611edd524db7ae2c1186b33951b2&gs_lcrp=EgRlZGdlKgkIABBFGDsY-QcyCQgAEEUYOxj5BzIGCAEQABhAMgYIAhAAGEAyBggDEAAYQDIGCAQQRRg5MgYIBRAAGEAyBggGEC4YQDIGCAcQLhhAMgYICBBFGDzSAQgyNDE3ajBqMagCALACAA&FORM=ANNTA1&PC=ASTS">
                    Pemrograman back end front end</a></p>
        </div>
        <div class="card"><img src="opini2.jpeg" alt="" width="200">
            <p><a
                    href="https://www.bing.com/search?pglt=2339&q=struktur+data&cvid=6afe225ce71243e28c9bab8a903043c4&gs_lcrp=EgRlZGdlKgkIABBFGDsY-QcyCQgAEEUYOxj5BzIGCAEQABhAMgYIAhBFGDkyBggDEC4YQDIGCAQQABhAMgYIBRAuGEAyBggGEAAYQDIGCAcQRRg8MgYICBBFGDzSAQgyMjIzajBqMagCALACAA&FORM=ANNTA1&PC=ASTS">
                    Struktur Data</a></p>
        </div>
        <div class="card"><img src="opini1.jpeg" alt="" width="200">
            <p><a
                    href="https://www.bing.com/search?pglt=2339&q=basis+data&cvid=be12b2e127094506ba7b32d20269093b&gs_lcrp=EgRlZGdlKgkIABBFGDsY-QcyCQgAEEUYOxj5BzIGCAEQABhAMgYIAhAAGEAyBggDEEUYOTIGCAQQRRg7MgYIBRAAGEAyBggGEAAYQDIGCAcQRRg8MgYICBBFGDzSAQgyNjcwajBqMagCALACAA&FORM=ANNTA1&PC=ASTS">
                    Basis Data</a></p>
        </div>
    </section>

    <section class="opini">
        <div class="card"><img src="opini4.png" alt="" width="200">
            <p><a
                    href="https://www.bing.com/search?pglt=2339&q=statistika&cvid=baedc540b9174c79b6d2fe32652b3d96&gs_lcrp=EgRlZGdlKgkIABBFGDsY-QcyCQgAEEUYOxj5BzIGCAEQABhAMgYIAhBFGDkyBggDEC4YQDIGCAQQABhAMgYIBRAuGEAyBggGEC4YQDIGCAcQRRg8MgYICBBFGDzSAQgxODU3ajBqMagCALACAA&FORM=ANNTA1&PC=ASTS">
                    Statistika</a></p>
        </div>
        <div class="card"><img src="opini5.jpeg" alt="" width="210">
            <p><a
                    href="https://www.bing.com/search?pglt=2339&q=kalkulus&cvid=f6ce039fcf3a4417b914727c85376c69&gs_lcrp=EgRlZGdlKgkIABBFGDsY-QcyCQgAEEUYOxj5BzIGCAEQABhAMgYIAhBFGDkyBggDEC4YQDIGCAQQABhAMgYIBRAAGEAyBggGEAAYQDIGCAcQRRg8MgYICBBFGDzSAQgyMTgyajBqMagCCLACAQ&FORM=ANNTA1&PC=ASTS">
                    Kalkulus</a></p>
        </div>
        <div class="card"><img src="opini6.jpeg" alt="" width="210">
            <p><a
                    href="https://www.bing.com/search?pglt=2339&q=w3schools&cvid=211fdb478e77420bb2532d5d3b54ac8f&gs_lcrp=EgRlZGdlKgkIABBFGDsY-QcyCQgAEEUYOxj5BzIGCAEQLhhAMgYIAhBFGDkyBggDEAAYQDIGCAQQABhAMgYIBRAAGEAyBggGEAAYQDIGCAcQABhAMgYICBBFGDzSAQgxNjM4ajBqMagCCLACAQ&FORM=ANNTA1&PC=ASTS">
                    W3Schools</a></p>
        </div>
    </section>

    <div class="kontak">
        <div class="left">
            <h2>Hubungi Saya</h2>
                <input type="email" placeholder="Email" required>
                <input type="text" placeholder="Nama" required>
                <input type="text" placeholder="Alamat" required>
                <textarea placeholder="Isi Pesan" rows="4" required></textarea>
                <button type="submit">Kirim</button>
        </div>
        <div class="separator"></div>
        <div class="right">
            <h2>Maps</h2>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3954.9586263843784!2d111.9870004!3d-7.609782!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e784bb55e8a1fd9%3A0x83c5b8a3844e45e3!2sTrate%2C%20Kec.%20Sugihwaras%2C%20Kabupaten%20Bojonegoro%2C%20Jawa%20Timur!5e0!3m2!1sen!2sid!4v1714023907262!5m2!1sen!2sid"></iframe>
        </div>
    </div>

    <footer>
        <p> &copy; Copyright stefaniandini</p>
    </footer>
</body>

</html>
