<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <!-- cdn css bootstrap start -->
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- cdn css bootstrap end-->
    <title>Tambah Kategori</title>
</head>
<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header bg-secondary">
                        <h3 class="text-center">Tambah Kategori</h3>
                   
                </div>
                <div class="card-body p-4">
                    <form action="simpan.php" method="POST">
                       

                        <div class="form-group mb-2">
                            <label>Nama Kategori</label>
                            <input type="text" name="nama_kategori" placeholder="Masukkan Nama kategori " class="form-control">
                        </div>

                        <div class="form-group mb-2">
                           <label>Jenis Kategori</label>
                                <select class="form-control" name="jenis_kategori">
                                <option>fiksi</option>
                                <option>Non fiksi</option>
                            </select>
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