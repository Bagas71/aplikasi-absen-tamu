<?php 
require 'functions.php';
// pagination
// konfigurasi
$jumlahDataPerhalaman = 6;
$jumlahData = count(query("SELECT * FROM tamu"));
$jumlahHalaman = ceil( $jumlahData / $jumlahDataPerhalaman);
$halamanAktif = ( isset($_GET["halaman"]) ) ? $_GET["halaman"] : 1;
$awalData = ( $jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;

$tampil = mysqli_query($conn, "SELECT * FROM tamu  ORDER BY id ASC LIMIT $awalData, $jumlahDataPerhalaman"); 

// untuk mengaktifkan pencarian
if (isset($_POST['cari']) ) {
  $tampil = cari($_POST["keyword"]);
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css.css">
    <link href="fontawesome/css/all.min.css" rel="stylesheet">
    <title>Buku Tamu</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-12">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
            <div>
              <img src="img/makassar.png" style="width: 50px; height: 50px;">
              <a class="navbar-brand text-warning" href="index.php">Dinas Pendapatan Daerah Kota Makassar</a>
            </div>
            <form class="form-inline ml-auto" action="" method="post">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="keyword">
              <button class="btn btn-outline-warning my-2 my-sm-0" type="submit" name="cari">Search</button>
            </form>
            <div class="text-warning ml-4">
              <a href="login.php"><i class="fas fa-user-cog text-warning"  data-toggle="tooltip" data-placement="top" title="Login"></i></a>   
            </div>
        </nav>

        <div class="container">
        <center><h2 class="mt-4 text-warning" style="font-weight: bold; "> Buku Tamu</h2></center>
           <table class="table table-bordered bg-transparent">
              <thead class="thead">
                <tr>
                  <th scope="col">NO</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Asal</th>
                  <th scope="col">Alamat</th>
                  <th scope="col">Jenis Kelamin</th>
                  <th scope="col">No.Hp</th>
                  <th scope="col">Tujuan</th>
                </tr>
              </thead>
              <tbody class="text-white">
                  <?php $i = 1; ?>
                  <?php foreach ($tampil as $isi ) : ?>
                <tr>
                  <td scope="row"><?= $i ?></td>
                  <td><?= $isi['nama']; ?></td>
                  <td><?= $isi['asal'] ?></td>
                  <td><?= $isi['alamat']; ?></td>
                  <td><?= $isi['jenis_kelamin']; ?></td>
                  <td><?= $isi['hp']; ?></td>
                  <td><?= $isi['tujuan']; ?></td>
                </tr>
                <?php $i++; ?>
                <?php endforeach; ?>
              </tbody>
            </table>
        </div>

        <div class="container">
            <nav aria-label="Page navigation example " style="float: left;">
              <ul class="pagination ">
                <li class="page-item ">
                  <?php if ( $halamanAktif > 1) : ?>
                      <a class="page-link bg-dark text-warning" href="?halaman=<?= $halamanAktif - 1; ?>" aria-label="Previous">
                      <span aria-hidden="true">&laquo;</span>
                      </a>
                  <?php endif; ?>
                   
                </li>
                <?php for ( $i = 1 ; $i <= $jumlahHalaman; $i++) : ?>
                  <?php if( $i == $halamanAktif) : ?>
                    <li class="page-item"><a class="page-link bg-dark text-warning" href="?halaman=<?= $i ; ?>"><?= $i ;  ?></a></li>
                  <?php else : ?>
               
                <li class="page-item"><a class="page-link bg-dark text-warning" href="?halaman=<?= $i ; ?>"><?= $i ;  ?></a></li>
                  <?php endif; ?>
                <?php endfor; ?>

                <?php if ( $halamanAktif < $jumlahHalaman) : ?>
                <li class="page-item">
                  <a class="page-link bg-dark text-warning" href="?halaman=<?= $halamanAktif + 1; ?>" aria-label="Next">
                    <span aria-hidden="true">&raquo;</span>
                  </a>
                </li>
                <?php endif; ?>
              </ul>
            </nav>
          </div>


        <div class="container">
          <button style="float: right;" type="button" class="btn btn-dark btn-lg"><a href="tambah.php" class="btn btn-dark text-warning">Tambah Data</a></button>
        </div>

      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/js.js"></script>
  </body>
</html>