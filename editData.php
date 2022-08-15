<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>

<body>
    <div class="align-items-center mt-5">
        <h1 class=" fw-bold">Edit Barang</h1>
    </div>
        <form action="newEdit.php?id=<?php echo $_GET['id'];?>" method="post">
        <div class="d-flex flex-column gap-1 mt-2 mx-4">
            <label for='barang'>Nama Barang</label>
            <input id="barang" class="form-control form-control-lg" placeholder="Nama Barang" name="barang" required>
            <p>Harga Beli (Rupiah)</p>
            <input id="hargaBeli" type="number" class="form-control form-control-lg" placeholder="Harga Beli" name="harga_beli" required>
           <p>Harga Jual (Rupiah)</p>
          <input id="hargaJual" type="number" class="form-control form-control-lg" placeholder="Harga Jual" name="harga_jual" required>
        <div class="d-flex flex-column gap-3">
        <button type="submit" class="btn btn-primary btn-lg p-3 fw-bold" style="width: 100%;">Simpan</button>
        </div>
    </form>
    <a href="home.php" class="btn btn-dark btn-lg p-3 fw-bold" style="width: 100%;">Daftar Barang</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
        crossorigin="anonymous"></script>
</body>

</html>