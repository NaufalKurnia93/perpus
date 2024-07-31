<?php 
  
  include('../database/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM peminjaman_detail WHERE id_peminjaman_detail = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit Peminjaman Detail</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header text-center bg-primary">
              EDIT Peminjaman Detail
            </div>
            <div class="card-body">
              <form action="update.php" method="POST">
                
               
              <div class="form-group mb-2">
              <div class="text-center">
                
                    <label>Id</label>
                  <input type="hidden" name="id_peminjaman_detail" value="<?php echo $row['id_peminjaman_detail'] ?>">
                  </div>

                      <label class="form-label">Id Peminjaman</label>
                         <select class="form-control" name="id_peminjaman">
                      <?php 
                          $peminjaman = mysqli_query($connection, "select * from peminjaman");
                            while($key = mysqli_fetch_array($peminjaman)) {

                                if ($key['id_peminjaman'] == $key['id_peminjaman']) { ?>
                                  <option value="<?php echo $key['id_peminjaman']; ?>" selected><?php echo $key['id_peminjaman']; ?></option>;
                                  
                      <?php } else { ?> 
                        <option value="<?php echo $key['id_peminjaman']; ?>"><?php echo $key['id_peminjaman']; ?></option>;
                      <?php }

                          }
                        ?>
                                <option value="">--pilih id peminjaman--</option>
                            </select>
                        </div>
                
                <div class="form-group mb-2">
                           <label class="form-label">Buku</label>
                                <select class="form-control" name="id_buku">
                                  
                        <?php 
                          $buku = mysqli_query($connection, "select * from buku");
                          while($key = mysqli_fetch_array($buku)) {
                            if ($key['id_buku'] == $key['id_buku']) { ?>
                           
                               <option value="<?php echo $key['id_buku']; ?>" selected><?php echo $key['judul']; ?></option>;
                      <?php } else { ?> 
                        <option value="<?php echo $key['id_buku']; ?>"><?php echo $key['judul']; ?></option>;
                            <?php }
                          }
                        ?>
                                <option value="">--pilih buku--</option>
                            </select>
                        </div>

              <div class="form-group">
                <label>Denda</label>
                  <input type="number" name="denda" value="<?php echo $row['denda'] ?>" placeholder="Masukkan Denda" class="form-control">
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