<?php
if(isset($_POST['simpan'])){
    
    include('koneksi.php');
    
    $nama_satelit     = $_POST['nama_satelit'];
    $mulai_operasi    = $_POST['mulai_operasi'];
    $akhir_operasi    = $_POST['akhir_operasi'];
    $pengelola        = $_POST['pengelola'];
    $wahana_luncur    = $_POST['wahana_luncur'];
    $pembuat          = $_POST['pembuat'];
    $keterangan       = $_POST['keteragan'];
    $update = mysqli_query($koneksi, "update custom set
    
    nama_satelit    = '$nama_satelit',
    mulai_operasi   = '$mulai_operasi',
    akhir_operasi   = '$akhir_operasi',
    pengelola       = '$pengelola',
    wahana_luncur   = '$wahana_luncur',
    pembuat         = '$pembuat',
    keterangan      = '$keterangan'
    
    where nama_satelit = '$nama_satelit'")

        or die(mysqli_error($koneksi));
    
    if ($update){
        echo "<h2>data berhasil diupdate</h2>";
        echo "<script>window.location = 'pas.php';</script>";
    }
    else {
        echo "<h2>gagal menyimpan data<h2>";
        echo "<a href = 'edit.php ?nama_satelit = ".$nama_satelit."'>kembali</a>";
    }
}
else{
    echo "<script>window.history.back()</script>";
}

?>