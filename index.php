<?php
include_once("config.php");
$result = mysqli_query($mysqli, "SELECT * FROM alat ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Sim Rs</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/index.css">
</head>

<body>

<header>Data Alat Elektromedis</header>

<div class="container">
    <a href="add.php">+ Tambah Alat</a>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Alat</th>
                <th>Tahun</th>
                <th>Merek</th>
                <th>Lokasi</th>
                <th>Kondisi</th>
                <th>Maintenance</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $i = 1;
            while($row = mysqli_fetch_array($result)) {
                echo "<tr>";
                echo "<td data-label='No'>".$i."</td>";
                echo "<td data-label='Kode'>".$row['kode_alat']."</td>";
                echo "<td data-label='Nama'>".$row['nama_alat']."</td>";
                echo "<td data-label='Tahun'>".$row['tahun']."</td>";
                echo "<td data-label='Merek'>".$row['merek']."</td>";
                echo "<td data-label='Lokasi'>".$row['lokasi']."</td>";
                echo "<td data-label='Kondisi'>".$row['kondisi']."</td>";
                echo "<td data-label='Maintenance'>".$row['tanggal_maintenance']."</td>";
                echo "<td data-label='Aksi'>
                        <a href='edit.php?id=$row[id]'>Edit</a> | 
                        <a href='delete.php?id=$row[id]' onclick=\"return confirm('Yakin hapus?')\">Delete</a>
                      </td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>

</body>
</html>