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
	/*Dibawah ini proses update ke dalam database */
	mysql_query("UPDATE dataphonebook SET nama_phonebook = '$nama', 
									  telepon_phonebook = '$telepon',
									  alamat_phonebook = '$alamat'
									  WHERE id_phonebook = '$_POST[id]'");

	/*Setelah proses update selesai data di kembalikan ke form input*/
	header('location:index.php');
}
?>