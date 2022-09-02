<?php
 include "../file/koneksi.php";

 $name =$_post['user']; 
 $pass_wd     =$_post['pass_user'];
//echo $username." dan ". $pass;
$cari=myqli_query($koneksi_,"SELECT * FROM tb_login where username='$name' and pass='$pass_wd");
$hasilnya_mysqli_num_rows($cari);

if($hasil>0){
    header("location:../menu_utama.php");

}else{  //tidak ada datanya
        header("location:../index.php");
}
?>