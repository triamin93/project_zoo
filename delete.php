<?php

if (isset($_GET["id"])) {
    $id = (int) $_GET["id"];
    $all = file_get_contents('kebun_binatang.json');
    $all = json_decode($all, true);
    $jsonfile = $all["kebun_binatang"];
    $jsonfile = $jsonfile[$id];

    if ($jsonfile) {
        unset($all["kebun_binatang"][$id]);
        $all["kebun_binatang"] = array_values($all["kebun_binatang"]);
        file_put_contents("kebun_binatang.json", json_encode($all));
    }
    header("Location: data.php");
}
