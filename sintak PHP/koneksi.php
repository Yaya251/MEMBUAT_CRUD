<?php
 /*
 penulis: Yaya Hidayat
 Nama Database yang telah dibuat bernama "db_android"
 dan di simpan di C:\xampp\htdocs\CRUD
 */
 
 //Mendefinisikan Konstanta
 define('HOST','localhost');
 define('USER','root');
 define('PASS','');
 define('DB','db_android');
 
 //membuat koneksi dengan database
 $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Connect');
 ?>