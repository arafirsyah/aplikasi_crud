<?php
	include 'koneksi.php'; // masukan script koneksi
	mysql_query("DELETE FROM dataphonebook WHERE id_phonebook='$_GET[id]'"); //perintah delete dalam databse sesuai id
	header('location:index.php');
?>
