<?php 
  
  include('../database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM penulis WHERE id_penulis = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Penulis</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center bg-primary">
              Edit Penulis
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
                <div class="form-group">
                  <div class="">
                    <label>Id</label>
                  <input type="text" name="id_penulis" value="<?php echo $row['id_penulis'] ?>">
                  </div>
                  <label>Nama</label>
                  <input type="text" name="nama_penulis" value="<?php echo $row['nama_penulis'] ?>" placeholder="Masukkan nama anda" class="form-control">
                 
                </div>

                <div class="form-group">
                  <label>Asal Negara</label>
                  <input type="text" name="asal_negara" value="<?php echo $row['asal_negara'] ?>" placeholder="Masukkan negara kebangsaan" class="form-control">
                </div>

                <div class="form-group">
                  <label>Jumlah Karya</label>
                  <input type="number" name="jumlah_karya" value="<?php echo $row['jumlah_karya'] ?>" placeholder="Masukkan jumlah" class="form-control">
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