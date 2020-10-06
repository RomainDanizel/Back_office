<?php
require_once  __DIR__ . "/configs/index.php";
require_once  __DIR__ . "/model/bdd.php";
require_once __DIR__ . "/model/artist.php";

$bdd = new Database();
$db = $bdd->connect();
$artist = new Artist();

if (isset($_GET["p"])) {
    $page = $_GET["p"];
}
else {
    $page = "accueil";
    }
@include("layout/header.php");
@include("view/" . $page . ".phtml");
@include("layout/footer.php");
unset($db);
unset($_GLOBAL);