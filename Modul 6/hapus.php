<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
      <link rel="stylesheet" href="style.css">
      <link rel="icon" href="icon.png">
      <title>Space.id</title>
  </head>
    
    <?php
        if(isset($_GET['nama_satelit'])){
            include('koneksi.php');
            $nama_satelit        =$_GET['nama_satelit'];
            $cek        = mysqli_query($koneksi, "select nama_satelit from satelit where nama_satelit = '$nama_satelit'") or die(mysqli_error());
            
            if (mysqli_num_rows($cek) == 0){
                echo"<script>window.history.back()</script>";
            }
            else{
                $del = mysqli_query($koneksi, "delete from satelit where nama_satelit = '$nama_satelit'");
                    if ($del){
                        echo "<h3>Data Satelit Berhasil Dihapus</h3>";
                            echo " <script>window.location = 'pas.php';</script>";
                    }
                else{
                    echo "<h2>Gagal menghapus data satelit</h2>";
                    echo"<a href ='pas.php'>Kembali</a>";
                }
            }
        }
    else{
        echo "<script>window.history.back()</script>";
    }
    ?>
    
    <body>
    
    </body>
</html>