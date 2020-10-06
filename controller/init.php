<?php

require_once("../configs/index.php");
require_once("../model/bdd.php");
require_once("../model/artist.php");

$bdd = new Database();
$db = $bdd->connect();
$artist = new Artist();

