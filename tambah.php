<?php
require 'functions.php';

//apakah tombol submit/tambah sudah di tekan
if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        // data berhasil ditambahkan
        echo "
            <script>
                alert('data berhasil ditambahkan!')
                document.location.href = 'index.php';
            </script>

        ";
    }else{
        // data gagal di tambahkan
        echo "
            <script>
                alert('data gagal ditambahkan!')
                document.location.href = 'index.php';
            </script>
            ";
    }
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

    <title>Tambah Data</title>
  </head>
  <body>
    <div class="row">
      <div class="col-md-12">

        <nav class="navbar navbar-expand-lg navbar-light bg-dark">
          <div>
            <img src="img/makassar.png" style="width: 50px; height: 50px;">
            <a class="navbar-brand text-warning" href="index.php">Dinas Pendapatan Daerah Kota Makassar</a>
          </div>
        </nav>

        <div class="container">
        <center><h2 class="mt-4" style="font-weight: bold; "> ISI DATA ANDA</h2></center>
           <table class="table table-bordered">
              <thead class="thead">
                <tr>
                  <th scope="col">Masukkan Identitas</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <center>
                    <form action="" method="post">
                       <input type="hidden" name="id" value=""> 
                        <div class="form-group">
                            <div class="col-lg-10">
                              <input type="text" name="nama"  class="form-control" placeholder="Masukkan Nama Anda :">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10">
                              <select id="buku" class="form-control m-bot15" name="asal">
                                <option>- Pilih Asal Anda-</option> 
                                <option>  Instansi </option> 
                                <option>  Umum </option> 
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10">
                              <input type="text" name="alamat"  class="form-control"  placeholder="Masukkan Alamat Anda :">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10">
                              <select id="buku" class="form-control m-bot15" name="jk">
                                <option>- Pilih Jenis Kelamin -</option> 
                                <option>  Pria </option> 
                                <option>  Wanita </option> 
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10">
                              <input type="text" name="no_hp"  class="form-control"  placeholder="Masukkan No.Hp Anda :">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-10">
                              <select id="buku" class="form-control m-bot15" name="tujuan">
                                <option>- Pilih Tujuan Anda -</option> 
                                <option>  Pajak Bumi dan Bangunan </option> 
                                <option>  Bidang Pajak dan Retribusi Daerah </option> 
                                <option>  Bidang Penetapan </option> 
                                <option>  Pembukuan </option> 
                                <option>  Pelaporan Pajak </option> 
                                <option>  Retribusi Daerah </option>
                              </select>
                            </div>
                        </div>
                        <div class="form-group">
                          <div class="col-lg-offset-2 col-lg-10">
                            <button type="submit" name="tambah" class="btn btn-dark text-warning">Tambah Data</button>
                          </div>
                       </div>
                     </form>
                     </center>
                  </td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>