<?php
$localhost = "localhost";
$username = "root";
$password = "";
$database = "db_hotel";

$koneksi = mysqli_connect($localhost, $username, $password, $database);

if (!$koneksi) {
    echo "gagal";
}

  $sql = "SELECT * FROM tb_pesanhotel";
  $result = $koneksi->query($sql);
//   while($row = $result->fetch_assoc()){
    
//   }
//   echo $row[1];
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <title>Document</title>
</head>
<body>
    <?php while($row = $result->fetch_assoc()){?>
    <div class="container mt-5" style="margin:auto;">
            <div class="card-body text-center border border-dark">
                <h5 class="card-title bg-info">Invoice</h5>
                
                <p class="card-text">
                    <p><i class="fa-solid fa-person"></i>Jumlah Orang : <?php echo $row['jumlah_orang']; ?><br></p>
                    <p style="color:black; font-size:15px;"><i class="fa-solid fa-clock"></i> Waktu Check-in: <?php echo $row['check_in']; ?></p><br>
                    <p><i class="fa-solid fa-clock"></i> Waktu Check-out: <?php echo $row['check_out']; ?></p><br>
                    <p><i class="fa-solid fa-bed"></i> Jenis Kamar: <?php echo $row['pilih_kamar']; ?></p>
                <a href="index.html" class="btn btn-outline-danger">Kembali</a>
            </div>
        </div>
    </div>
    <?php
        }
    ?>
</body>
</html>