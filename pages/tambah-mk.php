<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<?php include './koneksi.php';?>

<form action="index.php?p=fungsi-mk" method="post">
<div class="form-group">
<label for="exampleInputEmail">Nama Mata Kuliah</label>
<input type="text" name="nama_mk" class="form-control w-50"
id="exampleInputEmail" aria-describedby="emailHelp"
placeholder="Masukkan Nama Mata Kuliah Anda..."required>
</div>

<div class="form-group">
<label for="exampleInputEmail">Jadwal</label>
<input type="datetime-local" name="jadwal" class="form-control w-50"
id="exampleInputEmail" aria-describedby="emailHelp"
placeholder="Masukkan Pilihan Jadwal Anda..."required>
</div>

<div class="form-group">
<label for="exampleInputEmail">Kelas</label>
<select name="kelas" class="form-control w-50" value="" 
required>
<option value="-" selected="selected">--PILIH KELAS--
<option value="KELASA">KELAS A</option>
<option value="KELASB">KELAS B</option>
<option value="KELASC">KELAS C</option>

</select>
</div>
<button type="submit" name="tambah-mk" value="Submit" class="btn btn-primary">tambah</button>
</form>