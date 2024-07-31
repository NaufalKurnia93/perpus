<?php include '../layout/header.php'; ?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Detail Peminjaman</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="card-header text-center bg-primary fw-bold">
            Peminjaman Detail
            </div>
            <div class="card-body">
              <a href="tambah.php" class="btn btn-md btn-primary" style="margin-bottom: 10px">Tambah Peminjaman Detail</a>
              <table class="table table-bordered" >
                <thead>
                  <tr>
                    <th scope="col">NO.</th>
                    <th scope="col">ID PEMINJAMAN</th>
                    <th scope="col">BUKU</th>
                    <th scope="col">DENDA</th> 
                    <th scope="col">AKSI</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                       include '../database/koneksi.php'; 
                      $no = 1;
                      $query = mysqli_query($connection,"SELECT * FROM peminjaman_detail");
                      while($row = mysqli_fetch_array($query)){
                  ?>

                  <tr>
                      <td><?php echo $no++ ?></td>
                      <td>
                      <?php 
                          $peminjaman = mysqli_query($connection, "select * from peminjaman");
                          while($key = mysqli_fetch_array($peminjaman)) {
                            if ($key['id_peminjaman'] == $row['id_peminjaman']) { ?>
                            <?php echo $key['id_peminjaman']; ?>
                            <?php 
                            }
                          }
                          ?>
                       </td>

                      <td>
                      <?php 
                          $buku = mysqli_query($connection, "select * from buku");
                          while($key = mysqli_fetch_array($buku)) {
                            if ($key['id_buku'] == $row['id_buku']) { ?>
                            <?php echo $key['judul']; ?>
                            <?php 
                            }
                          }
                          ?>
                       </td>

                       <td><?php echo $row['denda'] ?></td>

                      <td class="text-center">
                        <a href="edit.php?id=<?php echo $row['id_peminjaman_detail'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                        <a href="hapus.php?id=<?php echo $row['id_peminjaman_detail'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
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