<?php
require 'koneksi.php';
$email = $_POST['email'];
$password = $_POST['password'];

$query_sql ="SELECT * FROM user_kpr WHERE email ='$email' AND password='$password'";

$result =mysqli_query($conn, $query_sql);

if(mysqli_num_rows($result) > 0){
    header("Location: index.html");
}else{
    echo"<center><h1>Email atau Password salah. silahkan coba lagi kembali.</h1>
    <button><strong><a href='login.html'>Login</a></strong></button></center>";
}
?>