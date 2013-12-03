<!DOCTYPE html>
<head>
<title>Aplikasi Sederhana Create, Update, Read, Delete  (CRUD) Menggunakan PHP</title>
</head>
<body>
<?php include 'koneksi.php';
$q = mysql_query("SELECT * FROM dataphonebook WHERE id_phonebook='$_GET[id]'"); //menampilkan data dimana nilai id_phonebooknya = id yang ada di url 
$r = mysql_fetch_array($q); // Cocokan data dengan data di database
?>

<!--Buat Aksinya ke update.php-->
<form name="formsimpan" method="POST" action="update.php">
<!--buat nilai idnya dan jangan ditampilkan, hanya untuk dibaca di update.php-->
<input type="hidden" name="id" value="<?php echo $_GET['id'];?>" />
<table>
	<tbody>
		<tr><td>Nama</td><td>:</td><td><input type="text" name="nama" value="<?php echo $r['nama_phonebook'];?>" /></td></tr>
		<tr><td>No Telepon</td><td>:</td><td><input type="text" name="notelepon" value="<?php echo $r['telepon_phonebook'];?>" /></td></tr>
		<tr><td>Alamat</td><td>:</td><td><textarea name="alamat" rows="5" cols="16"><?php echo $r['alamat_phonebook'];?></textarea></td></tr>
		<tr><td colspan="3" align="left"><input type="submit" name="submit" value="Simpan Data" /></td></tr>
	</tbody>
</table>
</form>
</body>
</html>