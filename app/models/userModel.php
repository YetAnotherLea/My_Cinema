<?php

//Va chercher infos user
class CheckUser {
    private $db;

    public function __construct() {
        require "../../config/database.php";
        $this->db = $db;
    }

    public function getUserData() {
        $selectUser = $this->db->prepare
        ("SELECT * FROM `user`");
        $selectUser->setFetchMode(PDO::FETCH_ASSOC);
        $selectUser->execute();
        return $selectUser->fetchAll();
    }
}

$checkUser = new CheckUser();
