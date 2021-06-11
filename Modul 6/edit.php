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
        <?php
        include('koneksi.php');
        $nama_satelit = $_GET['nama_satelit'];
        $show = mysqli_query($koneksi, "select * from satelit where nama_satelit = '$nama_satelit'");
        if(mysqli_num_rows($show) == 0){
            echo '<script>window.history.back()</script>';
            
        }
        else{
            $d = mysqli_fetch_assoc($show);
                
        }
        
        ?>
        
     <from action="edit_proses.php" method="POST">
        <input type="hidden" name="nama_satelit" value="<?php echo $nama_satelit; ?>">
         <table>
            <tr>
             <td>Nama Satelit</td>
                <td><input type="text" name="nama_satelit" size="33" value="<?php echo $d['nama_satelit']; ?>" required></td>
             </tr>
             
             <tr>
                <td>Mulai Beroperasi</td>
                <td>
                 <input type="date" name="mulai_operasi" size="33" value="<?php echo $d['mulai_operasi'];?>" required>
                </td>
             </tr>
             <tr>
                <td>Akhir Beroperasi</td>
                <td>
                 <input type="text" name="akhir_operasi" size="33" value="<?php echo $d['akhir_operasi'];?>" required>
                </td>
             </tr>
             <tr>
                <td>Pengelola</td>
                <td>
                 <input type="text" name="pengelola" size="100" value="<?php echo $d['pengelola'];?>" required>
                </td>
             </tr>
             <tr>
                <td>Wahana Luncur</td>
                <td>
                 <input type="text" name="wahana_luncur" size="40" value="<?php echo $d['wahana_luncur'];?>" required>
                </td>
             </tr>
             <tr>
                <td>Pembuat</td>
                <td>
                 <input type="text" name="pembuat" size="50" value="<?php echo $d['pembuat'];?>" required>
                </td>
             </tr>
             <tr>
                <td>Keterangan</td>
                <td>
                 <input type="text" name="keterangan" size="150" value="<?php echo $d['keterangan'];?>" required>
                </td>
             </tr>
             <tr>
                <td>&nbsp;</td>
                 <td><input type="submit" name="simpan" value="simpan"> </td>
             </tr>
               
         </table>
         
        </from>
         <a href="pas.php"><input type="button" value="Kembali" id="kembali"></a>
    </body>
    
    
</html>