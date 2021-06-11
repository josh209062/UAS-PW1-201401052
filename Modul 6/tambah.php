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
    <h3>
    <a href="pas.php">kembali</a><br>
        <p>Tambah Data Mahasiswa</p>
    </h3>
    <form action="tambah_proses.php" method="post">
        <table>
            <tr>
                <td>Nama Satelit</td>
                <td><input type="text" name="nama_satelit" required></td>
            </tr>
            <tr>
                <td>Mulai Beroperasi</td>
                <td><input type="date" name="mulai_operasi" required></td>
            </tr>
            <tr>
                <td>Akhir Operasi</td>
                <td><input type="text" name="akhir_operasi" required></td>
            </tr>
            <tr>
                <td>Pengelola</td>
                <td><input type="text" name="pengelola" required></td>
            </tr>
            <tr>
                <td>Wahana Luncur </td>
                <td><input type="text" name="wahana_luncur" required></td>
            </tr>
            <tr>
                <td>Pembuat</td>
                <td><input type="text" name="pembuat" required></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><input type="text" name="keterangan" required></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td><input type="submit" name="tambah" value="Tambah"></td>
                
            </tr>
        
        </table>
    
    </form>
    </body>

</html>