<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "db_hotel";

$conn = new mysqli($localhost, $username, $password, $database);

// if ($conn->connect_error) {
//     die("Koneksi gagal: " . $conn->connect_error);
// }

// Mengambil data dari formulir
$nama_lengkap = $_POST['nama_lengkap'];
$umur = $_POST['umur'];
$nomor_hp = $_POST['nomor_hp'];
$email = $_POST['email'];
$password = $_POST['password'];

// Memasukkan data ke database
$sql = "INSERT INTO tb_daftar (nama_lengkap, umur, nomor_hp, email, password) 
VALUES ('$nama_lengkap', '$umur', '$nomor_hp','$email','$password')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan ke dalam database<br><a href='index.html'>Kembali</a>  "; 
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<!-- if (isset($_POST['aksi'])) {
    if ($_POST['aksi']=="add") {
        var_dump($_POST);
        die();
        echo"Tambah data <a href='index.html'>Home</a>";
    }elseif ($_POST['aksi']=="edit") {
        echo"Edit data <a href='index.html'>Home</a>";
    }
}

if (isset($_GET['hapus'])) {
    echo"Hapus data <a href='index.html'>Home</a>";
} -->
