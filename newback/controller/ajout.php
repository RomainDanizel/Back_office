<?php
include("init.php");

if(!isset($_POST['envoyer'])) {
    header("location:../?p=ajouter");
}
else {
    if (trim($_POST["featuring"]) == ""){
        $feat = NULL;
    }
    else {
        $feat = trim(htmlspecialchars($_POST["featuring"]));
    }
    $art = trim(htmlspecialchars($_POST["artist"]));
    $sty = trim(htmlspecialchars($_POST["style"]));
    $inf = trim(htmlspecialchars($_POST["infos"]));

    $extraction = explode(".", $_FILES["lien"]["name"]);
    $extension = end($extraction);
    $name_file =  round(microtime(true) ) . "." . $extension;
    $destination = __DIR__ . "/../public/video/";
    move_uploaded_file($_FILES["lien"]["tmp_name"], $destination . $name_file);
    $data = array(
        "artist"=> $art,
        "second_artist"=>$feat,
        "style"=>$sty,
        "filename"=>"public/video/" . $name_file,
        "infos"=>$inf
    );

    $insert = $artist->insertArtist($data);
    header("location:../");

}
include("close.php");