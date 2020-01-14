<?php 

 /*
 
 Selain kita butuh untuk menampilkan semua data pegawai kita juga perlu untuk menampilkan detail pegawai yang kita pilih atau kita select (READ). Oleh sebab itu mari kita buat file php dengan nama tampilPgw.php
 */
	
	//Mendapatkan Nilai Dari Variable ID Pegawai yang ingin ditampilkan
	$id = $_GET['id'];
	
	//Importing database
	require_once('koneksi.php');
	
	//Membuat SQL Query dengan pegawai yang ditentukan secara spesifik sesuai ID
	$sql = "SELECT * FROM tb_pegawai WHERE id=$id";
	
	//Mendapatkan Hasil 
	$r = mysqli_query($con,$sql);
	
	//Memasukkan Hasil Kedalam Array
	$result = array();
	$row = mysqli_fetch_array($r);
	array_push($result,array(
			"id"=>$row['id'],
			"name"=>$row['nama'],
			"desg"=>$row['posisi'],
			"salary"=>$row['gajih']
		));

	//Menampilkan dalam format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>