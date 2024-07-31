<?php 
  
  include('../database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Peminjaman</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center bg-primary">
              EDIT Peminjaman
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
               
              <div class="form-group mb-2">
              <div class="text-center">
                
                    <label>Id</label>
                  <input type="text" name="id_peminjaman" value="<?php echo $row['id_peminjaman'] ?>">
                  </div>

                      <label class="form-label">Anggota</label>
                         <select class="form-control" name="id_anggota">
                      <?php 
                          $anggota = mysqli_query($connection, "select * from anggota");
                            while($key = mysqli_fetch_array($anggota)) {

                                if ($key['id_anggota'] == $key['id_anggota']) { ?>
                                  <option value="<?php echo $key['id_anggota']; ?>" selected><?php echo $key['nama']; ?></option>;
                                  
                      <?php } else { ?> 
                        <option value="<?php echo $key['id_anggota']; ?>"><?php echo $key['nama']; ?></option>;
                      <?php }

                          }
                        ?>
                                <option value="">--pilih anggota--</option>
                            </select>
                        </div>

                <div class="form-group">
                  <label>Tanggal pinjam</label>
                  <input type="date" name="tanggal_pinjam" value="<?php echo $row['tanggal_pinjam'] ?>" placeholder="Masukkan tanggal" class="form-control">
                </div>

                <div class="form-group">
                  <label>tanggal Kembali</label>
                  <input type="date" name="tanggal_kembali" value="<?php echo $row['tanggal_kembali'] ?>" placeholder="Masukkan Tanggal" class="form-control">
                </div>

                
                <div class="form-group mb-2">
                           <label class="form-label">petugas</label>
                                <select class="form-control" name="id_petugas">
                                  
                        <?php 
                          $petugas = mysqli_query($connection, "select * from petugas");
                          while($key = mysqli_fetch_array($petugas)) {
                            if ($key['id_petugas'] == $key['id_petugas']) { ?>
                           
                               <option value="<?php echo $key['id_petugas']; ?>" selected><?php echo $key['nama_petugas']; ?></option>;
                      <?php } else { ?> 
                        <option value="<?php echo $key['id_petugas']; ?>"><?php echo $key['nama_petugas']; ?></option>;
                            <?php }
                          }
                        ?>
                                <option value="">--pilih petugas--</option>
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