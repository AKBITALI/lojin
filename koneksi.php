<?php
 $host="localhost";
 $username="root";
 $pass="";
 $database="tb_login";
 $koneksi_=mysqli_connect($host,$username,$pass,$database);
 if (mysqli_connect_errno()){
    echo " gagal untuk koneksi ke mysqli".mysqli_connect_eror();
 }





?>