<?php

//Va chercher info abonnements
class CheckSub {
    private $db;

    public function __construct() {
        require "../../config/database.php";
        $this->db = $db;
    }

    public function getSubData() {
        $selectSub = $this->db->prepare
        ("SELECT * FROM `user_subscriptions`");
        $selectSub->setFetchMode(PDO::FETCH_ASSOC);
        $selectSub->execute();
        return $selectSub->fetchAll();
    }
}

$checkSub = new CheckSub();
