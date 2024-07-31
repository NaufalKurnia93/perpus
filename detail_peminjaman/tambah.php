<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- cdn css bootstrap start -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- cdn css bootstrap end-->
    <title>Tambah Detail Peminjam</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="text-center">Tambah Detail Peminjam</h3>
                   
                </div>
                <div class="card-body p-4">
                    <form action="simpan.php" method="POST">
                       

                        
                    <div class="form-group mb-2">
                           <label class="form-label">Id Peminjaman</label>
                                <select class="form-control" name="id_peminjaman">
                                <option value="">--pilih id_peminjaman--</option>

                                <?php
                                 include('../database/koneksi.php');
                                 $result = mysqli_query($connection, "select * from peminjaman");
                                 while($key = mysqli_fetch_array($result)){
                                ?>

                            <option value="<?php echo $key['id_peminjaman']; ?>"><?php echo $key['id_peminjaman']; ?></option>
                                <?php 
                                 }
                                ?>
                            </select>
                        </div>

                               
                    <div class="form-group mb-2">
                           <label class="form-label">Buku</label>
                                <select class="form-control" name="id_buku">
                                <option value="">--pilih buku--</option>\

                                <?php
                                 include('../database/koneksi.php');
                                 $result = mysqli_query($connection, "select * from buku");
                                 while($key = mysqli_fetch_array($result)){
                                ?>

                            <option value="<?php echo $key['id_buku']; ?>"><?php echo $key['judul']; ?></option>
                                <?php 
                                 }
                                ?>
                            </select>
                        </div>

                        <div class="form-group mb-2">
                            <label>Denda</label>
                            <input type="number" name="denda" placeholder="Masukkan denda " class="form-control">
                        </div>

                        <button type="submit" class="btn btn-success">SIMPAN</button>
                <button type="reset" class="btn btn-danger">RESET</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-end">
    <a href="index.php" class="btn btn-sm btn-primary p-2 mt-4">Kembaii</a>
    </div>
    </div>

    <script src="https://code.jquery.com/jquery-    3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>