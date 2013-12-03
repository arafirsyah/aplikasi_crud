<?php
$host='localhost';// Nama Host
$user='root'; // username mysql lokal server (tergantung saat instalasi pakai username atau tidak)
$pass=''; //Password root (tergantung saat instalasi pakai username atau tidak)
$db='db_ajaxlogin'; // ------ Nama database --
$ok=mysql_connect($host,$user,$pass) or die ('gagal konek'.mysql_error()); // variabel koneksi mysql
mysql_select_db($db,$ok); // koneksikan ke database

/*deklarasi untuk kondisi jika diakses di url adddres saat di cek ada konek atau ga*/
if(!empty($_GET['konek'])){
	$_GET['konek'] = 'ok';
}else{
	$_GET['konek'] = '';
}

//Jika di kunjungi untuk liat status sudah terkoneksi atau belum, jika tidak konek tampilan akan kosong tapi jika konek maka akan tampil database terkoneksi
if($ok == true AND $_GET['konek'] != ''){
	echo 'database terkoneksi';
}else{
	echo "";
}

//silahkan test dengan mengunjungi http://localhost/phonebook/koneksi.php
?>