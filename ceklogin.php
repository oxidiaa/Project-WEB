<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "db_hotel";

$conn = new mysqli($localhost, $username, $password, $database);

 if (isset($_POST["login"])) {
  $email=$_POST['email'];
  $password=$_POST['password'];

  $result=mysqli_query($conn,"select * from tb_daftar where email='$email' and password='$password'");

  if (mysqli_num_rows($result) === 1) {
    $row=mysqli_fetch_assoc($result);
    echo"berhasil <a href='index.html'>Kembali</a>";
    // if (password_verify($password, $row["password"])) {
    //   var_dump($row['password']);
        
    //   # code...
    // }
    # code...
  }else{
    echo"gagal login <a href='login.php'>Kembali</a>";
    // header("Location: index.html");
    // exit;

  }
 }
?>
