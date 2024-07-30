<?php include '../layout/header.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Buku</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header text-center bg-primary fw-bold">
              Data Buku
            </div>
            <div class="card-body">
              <a href="tambah.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">TAMBAH BUKU</a>
              <table class="table table-bordered ">
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">JUDUL</th>
                    <th scope="col">KATEGORI</th>
                    <th scope="col">PENULIS</th>
                    <th scope="col">PENERBIT</th>
                    <th scope="col">TAHUN TERBIT</th>
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                       include '../database/koneksi.php'; 
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM buku");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td><?php echo $row['judul'] ?></td>

                       <td>
                      <?php 
                          $kategori = mysqli_query($connection, "select * from kategori");
                          while($key = mysqli_fetch_array($kategori)) {
                            if ($key['id_kategori'] == $row['id_kategori']) { ?>
                            <?php echo $key['nama_kategori']; ?>
                            <?php 
                            }
                          }
                          ?>
                       </td>


                    <td>
                      <?php 
                          $penulis = mysqli_query($connection, "select * from penulis");
                          while($key = mysqli_fetch_array($penulis)) {
                            if ($key['id_penulis'] == $row['id_penulis']) { ?>
                            <?php echo $key['nama_penulis']; ?>
                            <?php 
                            }
                          }
                          ?>
                       </td>
                       
                      <td><?php echo $row['penerbit'] ?></td>
                      <td><?php echo $row['tahun_terbit'] ?></td>
                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus.php?id=<?php echo $row['id_buku'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                      </td>
                  </tr>

                <?php } ?>
                </tbody>
              </table>
            </div>
          </div>
      </div>
    </div>
    <div class="text-end">
    <a href="../index.php" class="btn btn-sm btn-primary p-2 mt-4">Kembaii</a>
    </div>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script> -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- cdn bundle js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<!-- cdn bundle js -->
    <!-- <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
      $(document).ready( function () {
          $('#myTable').DataTable();
      } );
    </script> -->
  </body>
</html>