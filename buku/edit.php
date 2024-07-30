<?php 
  
  include('../database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM buku WHERE id_buku = $id LIMIT 1";

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
              Edit Buku
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <div class="">
                    <label>Id</label>
                  <input type="text" name="id_buku" value="<?php echo $row['id_buku'] ?>">
                  </div>
                  <label>Judul</label>
                  <input type="text" name="judul" value="<?php echo $row['judul'] ?>" placeholder="Masukkan nama anda" class="form-control">
                 
                </div>

                
                <div class="form-group mb-2">
                           <label class="form-label">Kategori</label>
                                <select class="form-control" name="id_kategori">
                        <?php 
                          $kategori = mysqli_query($connection, "select * from kategori");
                          while($key = mysqli_fetch_array($kategori)) {
                            if ($key['id_kategori'] == $key['id_kategori']) { ?>
                           
                               <option value="<?php echo $key['id_kategori']; ?>" selected><?php echo $key['nama_kategori']; ?></option>;
                      <?php } else { ?> 
                        <option value="<?php echo $key['id_kategori']; ?>"><?php echo $key['nama_kategori']; ?></option>;
                            <?php }
                          }
                        ?>
                                <option value="">--pilih kategori--</option>
                            </select>
                        </div>


                 <div class="form-group mb-2">
                           <label class="form-label">Penulis</label>
                                <select class="form-control" name="id_penulis">
                        <?php 
                          $penulis = mysqli_query($connection, "select * from penulis");
                          while($key = mysqli_fetch_array($penulis)) {
                            if ($key['id_penulis'] == $key['id_penulis']) { ?>
                           
                               <option value="<?php echo $key['id_penulis']; ?>" selected><?php echo $key['nama_penulis']; ?></option>;
                      <?php } else { ?> 
                        <option value="<?php echo $key['id_penulis']; ?>"><?php echo $key['nama_penulis']; ?></option>;
                            <?php }
                          }
                        ?>
                                <option value="">--pilih penulis--</option>
                            </select>
                        </div>

                  <div class="form-group">
                  <label>Penerbit</label>
                  <input type="text" name="penerbit" value="<?php echo $row['penerbit'] ?>" placeholder="Masukkan alamat" class="form-control">
                </div>

                <div class="form-group">
                  <label>Tahun Terbit</label>
                  <input type="text" name="tahun_terbit" value="<?php echo $row['tahun_terbit'] ?>" placeholder="Masukkan alamat" class="form-control">
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