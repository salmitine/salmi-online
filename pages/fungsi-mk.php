<?php
include './koneksi.php';

$id_mk          =$_POST['id_mk'];
$nama_mk        =$_POST['nama_mk'];
$jadwal         =$_POST['jadwal'];
$kelas          =$_POST['kelas'];

if($_POST['tambah-mk']){
    $queryTambah = mysqli_query($koneksi,"INSERT INTO matakuliah VALUES('','$nama_mk','$jadwal','$kelas')");

    $_SESSION["sukses-tambah"]='data anda berhasil disimpan!';

    if($queryTambah){
        header("location:index.php?p=tb-mk");
    }else{
        echo "ERROR,yah data anda tidak berhasil ditambahkan".mysqli_error($koneksi);
    }
}

if(isset($_POST['edit-mk'])){
    $queryEdit = mysqli_query($koneksi,"UPDATE matakuliah SET nama_mk='$nama_mk',jadwal='$jadwal',kelas='$kelas' WHERE id_mk='$id_mk'") ;

    $_SESSION["sukses-edit"]='data anda berhasil diedit!';

    if($queryEdit){
        header("location:index.php?p=tb-mk");
    }else{
        echo "ERROR,yah data anda tidak berhasil diedit".mysqli_error($koneksi);
    }
}

if(isset($_GET['id'])){
    $id_mk=$_GET['id'];
    $queryHapus=mysqli_query($koneksi,"DELETE FROM matakuliah WHERE id_mk='$id_mk'");
   

    $_SESSION["sukses-hapus"]='data anda berhasil dihapus!';

    if($queryHapus){
        header("location:index.php?p=tb-mk");
    }else{
        echo "ERROR,yah data anda tidak berhasil dihapus".mysqli_error($koneksi);
    }
}
?>