<?php
if (!empty($_POST)) {

    $id  = $_POST['id'];
    $nama  = $_POST['nama'];
    $alamat    = $_POST['alamat'];
    $gambar = $_POST['gambar'];

    $file = file_get_contents('kebun_binatang.json');
    $data = json_decode($file, true);
    unset($_POST["add"]);
    $data["kebun_binatang"] = array_values($data["kebun_binatang"]);
    array_push($data["kebun_binatang"], $_POST);
    file_put_contents("kebun_binatang.json", json_encode($data));
    header("Location: data.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>INPUT KEBUN BINATANG</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Kebun Binatang</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-item nav-link" href="index.php">Home</a>
                    <a class="nav-item nav-link" href="data.php">Data</a>
                </div>
            </div>
        </div>
    </nav>
    <br>
    <center>
        <h1>INPUT KEBUN BINATANG</h1>
    </center>
    <br>
    <br>

    <div class="container">
        <form method="POST" action="">
            <div class="form-group">
                <label for="inputIdKebun">ID Kebun Binatang</label>
                <input type="text" class="form-control" id="inputIdKebun" placeholder="Masukkan ID Kebun Binatang" name="id_kebun">
            </div>
            <div class="form-group">
                <label for="inputNama">Nama Kebun Binatang</label>
                <input type="text" class="form-control" id="inputNama" placeholder="Masukkan Nama Kebun Binatang" name="nama">
            </div>
            <div class="form-group">
                <label for="inputAlamat">Alamat Kebun Binatang</label>
                <input type="text" class="form-control" id="inputAlamat" placeholder="Masukkan Alamat Kebun Binatang" name="alamat">
            </div>
            <div class="form-group">
                <label for="inputGambar">Gambar Source Kebun Binatang</label>
                <input type="text" class="form-control" id="inputGambar" placeholder="Masukkan Source Gambar Kebun Binatang" name="gambar">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>