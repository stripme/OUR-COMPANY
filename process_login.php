<?php
// Ambil data dari formulir login
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

// Simpan data ke database (contoh menggunakan MySQL)
$servername = "localhost";
$db_username = "root";
$db_password = "";
$database = "data_user";

// Buat koneksi ke database
$conn = new mysqli($servername, $db_username, $db_password, $database);

// Periksa koneksi
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Lakukan operasi login dan penyimpanan data ke database di sini
// Contoh sederhana untuk menyimpan data ke tabel pengguna
$sql = "INSERT INTO user_kpr (nama,email, password) VALUES ('$nama','$email', '$password')";

if (mysqli_query($conn,$sql)){
    header("Location: login.html");
}else {
    echo "pendaftaran gagal :" . mysqli_error($conn);
}
?>