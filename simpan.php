<?php
include 'proses.php';

$nm_mhs= $_POST['nama'];
$nim= $_POST['nim'];
$jenis_kelamin= $_POST['jenis_kelamin'];
$alamat= $_POST['alamat'];
$agama= $_POST['agama'];
$telpon = $_POST['telpon'];



mysqli_query($penghubung, "INSERT INTO mahasiswa VALUES ('$nm_mh','$nim','$alamat','$telpon')");


header("location:index.php");