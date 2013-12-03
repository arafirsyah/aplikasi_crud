<!DOCTYPE html>
<head>
<title>Aplikasi Sederhana Create, Update, Read, Delete  (CRUD) Menggunakan PHP</title>
</head>
<body>
<?php include 'koneksi.php';?>

<form name="formsimpan" method="POST" action="insert.php">
<table>
	<tbody>
		<tr><td>Nama</td><td>:</td><td><input type="text" name="nama" value="" /></td></tr>
		<tr><td>No Telepon</td><td>:</td><td><input type="text" name="notelepon" value="" /></td></tr>
		<tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="5" cols="16"></textarea></td></tr>
		<tr><td colspan="3" align="left"><input type="submit" name="submit" value="Simpan Data" /></td></tr>
	</tbody>
</table>
</form>
<br/>
<!-- Buat Style biar ada garis  -->
<style>
.table
{
border-collapse:collapse;
}

th{
	background:#eee;
}

.table,.td, th
{
padding:3px 5px;
border:1px solid #000;
}
</style>
<table class="table">
	<tbody>
		<tr><th>No</th><th>Nama</th><th>No Telepon</th><th width="200">alamat</th><th>Aksi</th></tr>
		<?php
		// Buat pengulangan data yang ada dalam database
			$q = mysql_query("SELECT * FROM dataphonebook ORDER BY id_phonebook DESC"); //variable menampilkan data adalah $q
			$no = 1; // variabel nilai awal untuk membuat no
			while($r=mysql_fetch_array($q)){ //cocokan data dan lakukan pengulangan sesuai jumlah data
		?>
			<tr><td class="td"><?php echo $no++; ?></td><td class="td"><?php echo $r['nama_phonebook']; ?></td><td class="td" ><?php echo $r['telepon_phonebook']; ?></td><td class="td"><?php echo $r['alamat_phonebook']; ?></td> <td class="td" valign="top"><a href="edit.php?id=<?php echo $r['id_phonebook'];?>">Edit</a> | <a href="delete.php?id=<?php echo $r['id_phonebook'];?>">Delete</a></td></tr>
			<!--Tambahan untuk akses ke edit dan delete-->
		<?php
		
			}
		?>
	</tbody>
</table>

</body>
</html>