<?php
if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $getfile = file_get_contents('kebun_binatang.json');
    $jsonfile = json_decode($getfile, true);
    $jsonfile = $jsonfile["kebun_binatang"];
    $jsonfile = $jsonfile[$id];
}

if (isset($_POST["id"])) {
    $id = (int) $_POST["id"];
    $getfile = file_get_contents('kebun_binatang.json');
    $all = json_decode($getfile, true);
    $jsonfile = $all["kebun_binatang"];
    $jsonfile = $jsonfile[$id];

    $post["id_kebun"] = isset($_POST["id_kebun"]) ? $_POST["id_kebun"] : "";
    $post["nama"] = isset($_POST["nama"]) ? $_POST["nama"] : "";
    $post["alamat"] = isset($_POST["alamat"]) ? $_POST["alamat"] : "";
    $post["gambar"] = isset($_POST["gambar"]) ? $_POST["gambar"] : "";
    if ($jsonfile) {
        unset($all["kebun_binatang"][$id]);
        $all["kebun_binatang"][$id] = $post;
        $all["kebun_binatang"] = array_values($all["kebun_binatang"]);
        file_put_contents("kebun_binatang.json", json_encode($all));
    }
    header("Location:data.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>EDIT KEBUN BINATANG</title>
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
        <h1>EDIT KEBUN BINATANG</h1>
    </center>
    <br>
    <br>

    <div class="container">
        <?php if (isset($_GET["id"])) : ?>
            <form method="POST" action="update.php">
                <input type="hidden" value="<?php echo $id ?>" name="id" />
                <div class="form-group">
                    <label for="inputIdKebun">ID</label>
                    <input type="text" class="form-control" required="required" id="inputIdKebun" value="<?php echo $jsonfile["id_kebun"] ?>" name="id_kebun" placeholder="Masukkan ID Kebun Binatang">
                </div>
                <div class="form-group">
                    <label for="inputNama">Nama Kebun Bunatang</label>
                    <input type="text" class="form-control" required="required" id="inputNama" value="<?php echo $jsonfile["nama"] ?>" name="nama" placeholder="Masukkan Nama Kebun Binatang">
                </div>
                <div class="form-group">
                    <label for="inputAlamat">Alamat</label>
                    <input type="text" required="required" class="form-control" id="inputAlamat" value="<?php echo $jsonfile["alamat"] ?>" name="alamat" placeholder="Masukkan Alamat Kebun Binatang">
                </div>
                <div class="form-group">
                    <label for="inputGambar">Gambar</label>
                    <input type="text" required="required" class="form-control" id="inputGambar" value="<?php echo $jsonfile["gambar"] ?>" name="gambar" placeholder="Masukkan Gambar Kebun Binatang">
                </div>
                <div class="form-actions">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a class="btn btn btn-default" href="index.php">Back</a>
                </div>
    </div>
    </form>
<?php endif; ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>