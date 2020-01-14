<?php 

 /*
 Setelah kita membuat File untuk memasukkan data atau Create. Maka selanjutnya kita perlu File PHP untuk dapat menampilkan daftar data pegawai yang ada di database (READ), oleh sebab itu mari kita buat file php dengan nama tampilSemuaPgw.php
 
 */

	//Import File Koneksi Database
	require_once('koneksi.php');
	
	//Membuat SQL Query
	$sql = "SELECT * FROM tb_pegawai";
	
	//Mendapatkan Hasil
	$r = mysqli_query($con,$sql);
	
	//Membuat Array Kosong 
	$result = array();
	
	while($row = mysqli_fetch_array($r)){
		
		//Memasukkan Nama dan ID kedalam Array Kosong yang telah dibuat 
		array_push($result,array(
			"id"=>$row['id'],
			"name"=>$row['nama']
		));
	}
	
	//Menampilkan Array dalam Format JSON
	echo json_encode(array('result'=>$result));
	
	mysqli_close($con);
?>