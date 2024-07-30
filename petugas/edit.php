<?php 
  
  include('../database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM petugas WHERE id_petugas = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Petugas</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center bg-primary">
              Edit Petugas
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <div class="">
                    <label>Id</label>
                  <input type="text" name="id_petugas" value="<?php echo $row['id_petugas'] ?>">
                  </div>
                  <label>nama</label>
                  <input type="text" name="nama_petugas" value="<?php echo $row['nama_petugas'] ?>" placeholder="Masukkan nama anda" class="form-control">
                 
                </div>

                <div class="form-group mb-2">
                           <label>Jabatan</label>
                                <select class="form-control" name="jabatan">
                                <option>Kepala Perpustakaan</option>
                                <option>Teknisi Perpustakaan</option>
                                <option>Pelayanan Pengguna</option>
                            </select>
                        </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" name="alamat" value="<?php echo $row['alamat'] ?>" placeholder="Masukkan alamat" class="form-control">
                </div>

                <div class="form-group mb-2">
                           <label>Shift</label>
                                <select class="form-control" name="shift">
                                <option>pagi</option>
                                <option>siang</option>
                                <option>sore</option>
                            </select>
                  </div>

                  <div class="form-group mb-2">
                           <label>Jenis Kelamin</label>
                                <select class="form-control" name="jenis_kelamin">
                                <option>Laki-laki</option>
                                <option>Perempuan</option>
                            </select>
                        </div>
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>