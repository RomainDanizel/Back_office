<?php
class Artist {
    private $table;
    public function __construct() {
        $this->table = TABLE[0];
    }
    public function getList() {
        global $db;
        $data = [];
        $request = $db->prepare("SELECT * FROM " . $this->table);
        $request->execute();
        while ($index = $request->fetch(PDO::FETCH_OBJ)) {
            $data[] = $index;
        }
        return $data;
    }
    public function deleteArtist($id) {
        global $db;
        $request = $db->prepare("DELETE FROM " . $this->table . " WHERE id_video=:id ");
        $request->execute(array(
            "id"=>$id
        ));
        return ;
    }
    public function insertArtist($data) {
        global $db;
        $request = $db->prepare("INSERT INTO " . $this->table . "(artist, second_artist, style , filename, infos)
         VALUES(:artist, :second_artist, :style , :filename, :infos)");
         $request->bindParam(':artist', $data['artist'], PDO::PARAM_STR);
         $request->bindParam(':second_artist',$data['second_artist'], PDO::PARAM_STR);
         $request->bindParam(':style',$data['style'], PDO::PARAM_STR);
         $request->bindParam(':filename',$data['filename'],PDO::PARAM_STR);
         $request->bindParam(':infos',$data['infos'],PDO::PARAM_STR);
        $request->execute();
        return ;
    }
    public function getArtist($id) {
        global $db;
        $request = $db->prepare("SELECT * FROM " . $this->table . " WHERE id_video=:id " );
        $request->execute(array(
            "id"=>$id
        ));
        $index = $request->fetch(PDO::FETCH_OBJ);
        return $index;
    }
 }