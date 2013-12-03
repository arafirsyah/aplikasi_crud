<?php 
/*Sisipkan file untuk koneksi ke database*/
include 'koneksi.php';
/*
Buat Variable dari data yang dikirim sebelumnya
trim() merupakan fungsi untuk menghilangkan spasi sebelum dan sesudah string
strip_tags() merupakan fungsi php untuk memfilter dan menghilangkan tags html jika ada yang memasukan tag html
*/
$nama = strip_tags(trim($_POST['nama'])); 
$telepon = strip_tags(trim($_POST['notelepon'])); 
$alamat= strip_tags(trim($_POST['alamat'])); 

/*Cek Apakah semua data sudah di isi
	Jika tidak diisi
*/
if($nama == '' OR $telepon == '' OR $alamat ==''){
	echo "Maaf Semua Data Harus Diisi";
}else{
	/*Dibawah ini proses insert ke dalam database */
	mysql_query("INSERT INTO dataphonebook(nama_phonebook, telepon_phonebook, alamat_phonebook)
	VALUES ('$nama', '$telepon', '$alamat')");

	/*Setelah proses insert selesai data di kembalikan ke form input*/
	header('location:index.php');
}
?>