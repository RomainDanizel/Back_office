<?php

require_once __DIR__ . "/../configs/index.php";
require_once __DIR__ . "/../model/bdd.php";
require_once __DIR__ . "/../model/artist.php";

$bdd = new Database();
$db = $bdd->connect();
$artist = new Artist();

