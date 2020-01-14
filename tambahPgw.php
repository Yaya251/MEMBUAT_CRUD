<?php

 /*
 Setelah kita membuat koneksi dengan database. Selanjutnya kita buat file untuk memasukkan data atau Maka mari kita buat file php dengan nama tambahPgw.php
 
 */

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		//Mendapatkan Nilai Variable
		$name = $_POST['name'];
		$desg = $_POST['desg'];
		$sal = $_POST['salary'];
		
		//Pembuatan Syntax SQL
		$sql = "INSERT INTO tb_pegawai (nama,posisi,gajih) VALUES ('$name','$desg','$sal')";
		
		//Import File Koneksi database
		require_once('koneksi.php');
		
		//Eksekusi Query database
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Menambahkan Pegawai';
		}else{
			echo 'Gagal Menambahkan Pegawai';
		}
		
		mysqli_close($con);
	}
?>
