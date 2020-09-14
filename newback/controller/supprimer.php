<?php
include("init.php");
if (!isset($_GET["id"])) {
    header("location:../");
}
$request = $artist->deleteArtist($_GET["id"]);
header("location:../");
include("close.php");