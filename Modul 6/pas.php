<?php
session_start();
include "koneksi.php";

if (isset($_SESSION['username'])){
    header ("location:login.php");
}
if (isset($_SESSION['username'])){
    $username = $_SESSION['username'];
}

?>

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
     <body>
   
<!-- AWAL NAV-BAR-->
    <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
  <a class="navbar-brand" href="pas.html">Space.id</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>

  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="galaksi.html">Galaksi</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="bintang.html">Bintang</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Tata Surya
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="planet.html">Planet</a>
          <a class="dropdown-item" href="planetk.html">Planet Kerdil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="satelit.html">Satelit</a>
        </div>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="#lokasi">Lokasi</a>
      </li>
        <li class="nav-item">
        <a class="nav-link" href="aksi_logout.php">Keluar</a>
      </li>
      
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!--AKHIR NAV_BAR-->
    
    
<!-- Awal Carousel-->
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="car1.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Langit Malam</h5>
        <p>Apa yang kau pikirkan ketika melihat langit malam yang bertabur bintang??</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="milky-way-5295155_1920.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lihat galaksi kita</h5>
        <p>kita berada di galaksi yang bernama Bima Sakti.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="solar-system-439046_1920.jpg" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Lihatlah Tata Surya Kita</h5>
        <p>Tata surya kita memiliki banyak sekali planet dan satelitnya masing-masing.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Akhir Carousel-->
         
<!--Awal Cards-->
    <div class="container mt-5 mb-5">
<div class="card-deck">
  <div class="card">
    <img src="sunset-2180346_1920.jpg" class="card-img-top" alt="Matahari">
    <div class="card-body">
      <h5 class="card-title">Matahari</h5>
      <p class="card-text">Matahari adalah pusat dari tata surya kita, semua planet yang ada disekitar matahari mengelilinginya tanpa terkecuali.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="earth-1756274_1920.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bumi</h5>
      <p class="card-text">Bumi adalah satu-satunya planet yang memiliki kehidupan di tata surya kita dan merupakan satu-satunya tempat tinggal kita sejauh ini.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img src="moon-5307922_1920.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Bulan</h5>
      <p class="card-text">Bulan merupakan satelit alami dari bumi tampat tinggal kita. Dengan adanya bulan pasang dan surut air laut di bumi menjadi aman.</p>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
        </div>
<!--Akhir Cards-->
         
         
<div class="container jumbotron ">
    <div class="sol-lg-12 text-center mt-5 mb-5">
        <h3 class="display-4">Daftar Satelit Indonesia</h3>
    </div>
    <table class="table table-striped table-dark">
        <thead>
        <tr>
            <th>No</th>
            <th>Nama Satelit</th>
            <th>Mulai Beroperasi</th>
            <th>Akhir Beroperasi</th>
            <th>Pengelola</th>
            <th>Wahana Luncur</th>
            <th>Pembuat</th>
            <th>Keterangan</th>
            <th>Aksi</th>
            </tr>
        </thead>
    <!--Menampilkan data Satelit-->
        
        <?php
        include_once 'koneksi.php';
        $no=1;
        $data=mysqli_query($koneksi, "select * from satelit");
        while($d=mysqli_fetch_array($data)){
        ?>
            <tr>
                <td><?php echo $no++;?></td>
                <td><?php echo $d['nama_satelit'];?></td>
                <td><?php echo $d['mulai_operasi'];?></td>
                <td><?php echo $d['akhir_operasi'];?></td>
                <td><?php echo $d['pengelola'];?></td>
                <td><?php echo $d['wahana_luncur'];?></td>
                <td><?php echo $d['pembuat'];?></td>
                <td><?php echo $d['keterangan'];?></td>
                <td>
                    <a href="edit.php ?nama_satelit=<?php echo $d['nama_satelit'];?>" class="btn btn-warning">edit</a>
                    <a href="hapus.php ?nama_satelit=<?php echo $d['nama_satelit'];?>" class="btn btn-danger">hapus</a>
                </td>
        </tr>
        
        <?php
        }
        ?>
        
    <!--Menampilkan data Satelit-->
    </table>
    </div>
<!--        Menambahkan Data Satelit        -->

    <a href="tambah.php"><h4>Tambah Data Satelit?</h4></a>

<!--        Menambahkan Data Satelit        -->
         
         
         
<!--Awal Embeds-->
         <div class="embed-responsive embed-responsive-16by9 container">
  <iframe class="embed-responsive-item" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.527450384961!2d106.8874185141933!3d-6.193917562405233!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f4c0119a27ad%3A0x9c9c72f1f5b2cc3!2sLembaga%20Penerbangan%20dan%20Antariksa%20Nasional%20(LAPAN)!5e0!3m2!1sid!2sid!4v1620018888866!5m2!1sid!2sid" allowfullscreen></iframe>
</div>
<!--Akhir Embeds-->

         
<!--Awal Footer-->
     <footer id="lokasi" style="text-align: center; color: white" class="mt-2 mb-2">
     <img src="icon.png" alt="ini logo">
  <p>Space.id Universe in Your Arms</p>
         </footer>
<!--Akhir Footer-->
         
         
         
         
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

  </body>
</html>