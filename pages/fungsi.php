<?php
include'./koneksi.php';

$id_mahasiswa      = $_POST['id_mahasiswa'];
$nama              = $_POST['nama'];
$nim               = $_POST['nim'];
$prodi             = $_POST['prodi'];

//Untuk Tambah Data Mahasiswa
$id_mahasiswa =$_POST['id_mahasiswa']){
    if ($_POST['tambah-mahasiswa']) {
        $queryTambah=mysqli_query($koneksi,"INSERT INTO mahasiswa VALUES('', '$nama', $nim','$prodi')");

        if ($queryTambah) {
            header("location: index.php?p=tb-mahasiswa");
        } else {
            echo "EROR, Tidak berhasil tambah Data " .mysqli_error ($koneksi);
        }
    }
    // Untuk Edit Data Mahasiswa
     if (isset($_POST['edit-mahasiwa'])){
        $queryEdit = mysqli_query ($koneksi, "UPDATE mahasiswa SET nama='$nama',nim='$nim', prodi='$prodi' WHERE id_mahasiswa='$id_mahasiswa'");

     if ($queryEdit) {
         header("location: index.php?p=tb-mahasiswa");
        } else {
            echo "EROR, Tidak berhasil tambah Data " .mysqli_error ($koneksi);
        }
     }
     //Untuk Hapus Data Mahasiswa
     if (isset($_GET['id_mahasiswa'])) {
        $queryHapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");

        if ($queryHapus) {
            header("location: index.php?p=tb-mahasiswa");
        }else {
            echo "EROR, Tidak berhasil tambah Data " .mysqli_error ($koneksi);
        }
    }
    ?>