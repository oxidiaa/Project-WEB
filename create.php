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
$jumlah_orang = $_POST['jumlah_orang'];
$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];
$pilih_kamar = $_POST['pilih_kamar'];


// Memasukkan data ke database
$sql = "INSERT INTO tb_pesanhotel (jumlah_orang, check_in, check_out, pilih_kamar) 
VALUES ('$jumlah_orang', '$check_in', '$check_out','$pilih_kamar')";

if ($conn->query($sql) === TRUE) {
    echo "Data berhasil dimasukkan ke dalam database<br><a href='invoice.php'>Lihat Invoice</a>  "; 
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
