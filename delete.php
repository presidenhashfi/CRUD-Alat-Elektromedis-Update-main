<?php
// include database connection file
include_once("config.php");


$id = $_GET['id'];

// Delete user row from table based on given id
$result = mysqli_query($mysqli, "DELETE FROM alat WHERE id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
?>