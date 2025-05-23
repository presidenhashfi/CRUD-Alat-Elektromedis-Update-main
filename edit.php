<?php
// include database connection file
include_once("config.php");

// Check if form is submitted for user update, then redirect to homepage after update
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nama_alat= $_POST['nama_alat'];
    $tahun = $_POST['tahun'];
    $merek= $_POST['merek'];
    $lokasi = $_POST['lokasi'];
    $kode_alat = $_POST['kode_alat'];
    $kondisi = $_POST['kondisi'];
    $tanggal_maintenance = $_POST['tanggal_maintenance'];


    // update user data
    $result = mysqli_query($mysqli, "UPDATE alat SET 
    kode_alat='$kode_alat',
    nama_alat='$nama_alat',
    tahun='$tahun',
    merek='$merek',
    lokasi='$lokasi',
    kondisi='$kondisi',
    tanggal_maintenance='$tanggal_maintenance' 
    WHERE id=$id");


    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
?>
<?php
// Display selected user data based on id
// Getting id from url
$id = $_GET['id'];

// Fetech user data based on id
$result = mysqli_query($mysqli, "SELECT * FROM alat WHERE id=$id");

while($user_data = mysqli_fetch_array($result))
{
    $nama_alat = $user_data['nama_alat'];
    $tahun = $user_data['tahun'];
    $merek= $user_data['merek'];
    $lokasi = $user_data['lokasi'];
    $kode_alat = $user_data['kode_alat'];
    $kondisi = $user_data['kondisi'];
    $tanggal_maintenance = $user_data['tanggal_maintenance'];

}
?>
<html>
<head>
    <title>Edit User Data</title>
</head>

<body>
<a href="index.php">Home</a>
<br/><br/>

<form name="update_user" method="post" action="edit.php">
    <table border="0">
        <tr>
            <td>Nama Alat</td>
            <td><input type="text" name="nama_alat" value="<?php echo $nama_alat;?>"></td>
        </tr>
        <tr>
            <td>Tahun</td>
            <td><input type="text" name="tahun" value="<?php echo $tahun;?>"></td>
        </tr>
        <tr>
            <td>Merek</td>
            <td><input type="text" name="merek" value="<?php echo $merek;?>"></td>
        </tr>
        <tr>
            <td>Lokasi</td>
            <td><input type="text" name="lokasi" value="<?php echo $lokasi;?>"></td>
        </tr>
        <tr>
            <td>Kode Alat</td>
            <td><input type="text" name="kode_alat" value="<?php echo $kode_alat; ?>"></td>
        </tr>
        <tr>
            <td>Kondisi</td>
            <td>
                <select name="kondisi">
                    <option value="Baik" <?php if($kondisi == "Baik") echo "selected"; ?>>Baik</option>
                    <option value="Rusak" <?php if($kondisi == "Rusak") echo "selected"; ?>>Rusak</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Tanggal Maintenance</td>
            <td><input type="date" name="tanggal_maintenance" value="<?php echo $tanggal_maintenance; ?>"></td>
        </tr>

        <tr>
            <td><input type="hidden" name="id" value="<?php echo $_GET['id'];?>"></td>
            <td><input type="submit" name="update" value="Update"></td>
        </tr>

    </table>
</form>
</body>
</html>