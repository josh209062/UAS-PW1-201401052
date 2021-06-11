<?php
if(isset($_POST['tambah'])){
    include_once 'koneksi.php';
    $nama_satelit   = $_POST['nama_satelit'];
    $mulai_operasi  = $_POST['mulai_operasi'];
    $akhir_operasi  = $_POST['akhir_operasi'];
    $pengelola      = $_POST['pengelola'];
    $wahana_luncur  = $_POST['wahana_luncur'];
    $pembuat        = $_POST['pembuat'];
    $keterangan     = $_POST['keterangan'];
    
    $input = mysqli_query($koneksi, "insert into satelit values ('$nama_satelit', '$mulai_operasi', $akhir_operasi', '$pengelola', '$wahana_luncur', '$pembuat', '$keterangan')");
    
    
    if($input){
        echo"<h3>Data Berhasil Ditambahkan</h3>";
        echo"<script>window.location='pas.php'</script>";
    }
    else{
        echo"Gagal Denambahkan Data";
        echo"<a href = 'tambah.php'>kembali</a>";
    }
}
else{
    echo"<script>window.history.back()</script>";
}

?>