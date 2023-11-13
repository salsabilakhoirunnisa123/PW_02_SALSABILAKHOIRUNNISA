<?php
include 'proses.php'; // Sertakan berkas koneksi database Anda

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $telpon = $_POST['telpon'];

    // Lakukan query UPDATE untuk mengubah data dalam tabel 'mahasiswa'
    $query = "UPDATE mahasiswa SET nim = '$nim', nama = '$nama', alamat = '$alamat', telpon = '$telpon' WHERE nim = '$id'";
    $result = mysqli_query($penghubung, $query);

    if ($result) {
        // Jika pengeditan berhasil, alihkan kembali ke halaman awal atau halaman lain yang diinginkan
        header('Location: index.php'); // Ganti index.php dengan halaman yang sesuai
        exit;
    } else {
        // Jika terjadi kesalahan saat mengedit
        echo "Error: " . mysqli_error($penghubung);
    }
} else {
    echo "Akses tidak sah.";
}
?>
