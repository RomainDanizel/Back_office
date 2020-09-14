<?php
class Database {
    public function connect() {
        try {
            $bdd = new PDO(SGBD . ":host=" . HOST . ";port=" . PORT . ";dbname=" . DBB, USER, MDP, array(PDO:: MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
        }
        catch(Exception $e) {
            trigger_error( $e ->getMessage(), E_USER_ERROR);
        }
        return $bdd;
    }
}
