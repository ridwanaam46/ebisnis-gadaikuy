<?php
include "conn.php";


$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
if (empty($username)){
echo "<script>alert('username belum diisi')</script>";
echo "<meta http-equiv='refresh' content=' url=daftar.php'>";
}
if (empty($password)){
echo "<script>alert('password belum diisi')</script>";
echo "<meta http-equiv='refresh' content=' url=daftar.php'>";
}
if (empty($email)){
echo "<script>alert('email belum diisi')</script>";
echo "<meta http-equiv='refresh' content=' url=daftar.php'>";

}else{
$data=mysqli_query($db,"INSERT INTO tb_user ( `username`, `password`, `email`)VALUES('$username','$password','$email')");


//menyimpan ke database

if ($username == $row['username'] && $password == $row['password']&& $email == $row['email']){
    echo '
    <script language="javascript">
    document.location ="daftar.html";
    </script>
    ';

  }else{
    session_destroy();
    echo '
    <script language="javascript">
    alert("berhasil regis!");
    document.location ="daftar.html";
    </script>
    ';
  }
}
?>

