<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<?php 
include './koneksi.php';

$id_mahasiswa = $_GET['id'];
$query = "SELECT * FROM mahasiswa WHERE id_mahasiswa ='$id_mahasiswa'";
$result = mysqli_query($koneksi,$query);
while ($row = mysqli_fetch_assoc($result)) {
 
 ?>

<form action ="index.php?p=fungsi" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Mahasiswa</label>
    <input type="hidden" name="id_mahasiswa" value="<?= $row ['id_mahasiswa']; ?>" class="form-control w-50"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama . . ." required>
    <input type="text" name="nama" value="<?= $row ['nama']; ?>"  class="form-control w-50"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan Nama . . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">NIM</label>
    <input type="text" name="nim" value="<?= $row ['nim']; ?>" class="form-control w-50"
    id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan NIM . . ." required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Program Studi</label>
    <select name="prodi" class="form-control w-50" value="" required>
      <option value="<?= $row ['prodi']; ?>" selected="selected" >- Pilih Prodi -</option>
      <option value="Teknik Informasi" selected="selected" >Teknik Informasi</option>
      <option value="Sistem Informasi" selected="selected" >Sistem Informasi</option>
      <option value="Manajemen Infromatika" selected="selected" >Manajemen Infromatika</option>
  </select>
  </div>
  <button type="submit" name="edit-mahasiswa" value="Submit" class="btn btn-warning">Edit</button>
</form>

<?php } ?>