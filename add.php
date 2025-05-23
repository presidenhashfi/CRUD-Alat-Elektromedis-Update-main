<?php
include_once("config.php");

// Fungsi untuk generate kode alat acak
function generateKodeAlat() {
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $randomString = '';
    for ($i = 0; $i < 6; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return 'ALT-' . $randomString;
}

// Proses simpan data jika form disubmit
if (isset($_POST['submit'])) {
    $kode_alat = generateKodeAlat(); // generate otomatis
    $nama_alat = $_POST['nama_alat'];
    $tahun = $_POST['tahun'];
    $merek = $_POST['merek'];
    $lokasi = $_POST['lokasi'];
    $kondisi = $_POST['kondisi'];

    // Ambil tanggal dari dropdown
    $tanggal_maintenance = $_POST['tahun_maintenance'] . '-' . $_POST['bulan_maintenance'] . '-' . $_POST['tanggal_maintenance'];

    // Simpan ke database
    $result = mysqli_query($mysqli, "INSERT INTO alat(kode_alat,nama_alat,tahun,merek,lokasi,kondisi,tanggal_maintenance) 
    VALUES('$kode_alat','$nama_alat','$tahun','$merek','$lokasi','$kondisi','$tanggal_maintenance')");

    header("Location: index.php");
}
?>

<html>
<head>
    <title>Tambah Alat</title>
    <link rel="stylesheet" href="style/index.css"> <!-- Tambahkan link ke CSS -->
    <style>
        body {
            font-family: Arial;
            padding: 20px;
        }
        .form-container {
            background: #f2f2f2;
            padding: 20px;
            width: 400px;
            border-radius: 10px;
        }
        input[type="text"], select {
            width: 100%;
            padding: 8px;
            margin-top: 5px;
            margin-bottom: 15px;
        }
        input[type="submit"] {
            background-color: orange;
            border: none;
            padding: 10px 20px;
            color: white;
            font-weight: bold;
            cursor: pointer;
        }
    </style>
</head>
<body>

<h2>Tambah Alat Elektromedis</h2>
<a href="index.php">Kembali</a>
<br><br>

<div class="form-container">
    <form method="post" action="">
        <label>Nama Alat</label>
        <input type="text" name="nama_alat" required>

        <label>Tahun</label>
        <input type="text" name="tahun" placeholder="Contoh: 2023" required>

        <label>Merek</label>
        <input type="text" name="merek">

        <label>Lokasi</label>
        <input type="text" name="lokasi">

        <label>Kondisi</label>
        <select name="kondisi">
            <option value="Baik">Baik</option>
            <option value="Rusak">Rusak</option>
        </select>

        <label>Tanggal Maintenance</label><br>
        <select name="tanggal_maintenance">
            <?php for ($d = 1; $d <= 31; $d++) echo "<option value='$d'>$d</option>"; ?>
        </select>
        <select name="bulan_maintenance">
            <?php for ($m = 1; $m <= 12; $m++) echo "<option value='$m'>$m</option>"; ?>
        </select>
        <select name="tahun_maintenance">
            <?php 
                $currentYear = date("Y");
                for ($y = $currentYear; $y >= 2000; $y--) echo "<option value='$y'>$y</option>"; 
            ?>
        </select>
        <br><br>

        <input type="submit" name="submit" value="Simpan">
    </form>
</div>

</body>
</html>
