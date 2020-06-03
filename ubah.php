<?php 
require 'functions.php';

        // ambil data di url
    $id = $_GET["id"];


            // query data mahasiswa berdasarkan id
    $ubah = query("SELECT*FROM tamu WHERE id = $id")[0];

 
    // apakah tombol submit sudah di tekan / belum
if(isset($_POST["ubah"])) {
    // apakah data berhasil di ubah atau tidak
    if(ubah($_POST) > 0 ){

        //menggunakan sintax java script untuk memberikan informasi gagal / tidak
        echo "
            <script>
                alert('data berhasil diubah!')
                document.location.href = 'index_admin.php';
            </script>
        ";
    }else{
        
        echo "
            <script>
                alert('data gagal diubah!')
                document.location.href = 'index_admin.php';

            </script>
            ";
             die;
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
            <a class="navbar-brand text-warning" href="index_admin.php">Dinas Pendapatan Daerah Kota Makassar</a>
          </div>
        </nav>

        <div class="container">
        <center><h2 class="mt-4" style="font-weight: bold; "> Tambah Data </h2></center>
           <table class="table table-bordered">
              <thead class="thead">
                <tr>
                  <th scope="col">Masukkan Data Baru</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>
                    <center>
                    <form action="" method="post"> 
                        <input type="hidden" name="id" value="<?= $ubah['id']; ?>"> 
                        <div class="form-group">
                            <div class="col-lg-10">
                              <input type="text" name="nama"  class="form-control" placeholder="Masukkan Nama Anda :" value="<?= $ubah['nama'];?>">
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
                              <input type="text" name="alamat"  class="form-control"  placeholder="Masukkan Alamat Anda :" value="<?= $ubah['alamat'];?>">
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
                              <input type="text" name="no_hp"  class="form-control"  placeholder="Masukkan No.Hp Anda :" value="<?= $ubah['hp'];?>">
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
                            <button type="submit" name="ubah" class="btn btn-dark text-warning">Ubah Data</button>
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