<?php
$getfile = file_get_contents('kebun_binatang.json');
$jsonfile = json_decode($getfile);
?>
<!DOCTYPE html>
<html>

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <title>DATA KEBUN BINATANG</title>
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
        <h1>DATA KEBUN BINATANG</h1>
    </center>
    <br>
    <br>
    <div class="container">
        <a class="btn btn-primary" href="insert.php"></i>Tambah Data</a>
    </div>
    <br>
    <div class="container">
        <table class="table table-striped table-bordered table-hover">
            <tr>
                <th>No.</th>
                <th>ID</th>
                <th>Nama Kebun Binatang</th>
                <th>Alamat</th>
                <th>Gambar</th>
                <th>Action</th>
            </tr>
            <?php $no = 0;
            foreach ($jsonfile->kebun_binatang as $index => $obj) : $no++;  ?>
                <tr>
                    <td><?php echo $no; ?></td>
                    <td><?php echo $obj->id_kebun; ?></td>
                    <td><?php echo $obj->nama; ?></td>
                    <td><?php echo $obj->alamat; ?></td>
                    <td><img src="<?php echo $obj->gambar; ?>" height="150px" width="250px"></td>
                    <td>
                        <a class="btn btn-xs btn-primary btn-group" href="update.php?id=<?php echo $index; ?>">Edit</a>
                        <a class="btn btn-xs btn-danger btn-group" href="delete.php?id=<?php echo $index; ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>

</html>