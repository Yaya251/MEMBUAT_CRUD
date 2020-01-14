<?php 

 /*
 
 Sampai tahap ini kita telah membuat file PHP untuk Create, Reade. Selanjutnya mari kita buat file php untuk Update. Dalam kasus ini untuk Update data pegawai, maka mari kita buat file php dengan nama updatePgw.php
 
 */
	if($_SERVER['REQUEST_METHOD']=='POST'){
		//MEndapatkan Nilai Dari Variable 
		$id = $_POST['id'];
		$name = $_POST['name'];
		$desg = $_POST['desg'];
		$sal = $_POST['salary'];
		
		//import file koneksi database 
		require_once('koneksi.php');
		
		//Membuat SQL Query
		$sql = "UPDATE tb_pegawai SET nama = '$name', posisi = '$desg', gajih = '$sal' WHERE id = $id;";
		
		//Meng-update Database 
		if(mysqli_query($con,$sql)){
			echo 'Berhasil Update Data Pegawai';
		}else{
			echo 'Gagal Update Data Pegawai';
		}
		
		mysqli_close($con);
	}
?>