<?php

//Vérifie si l'utilisateur passé en input existe
class CheckAccount {
    private $db;

    public function __construct() {
        require "../../config/database.php";
        $this->db = $db;
    }

    public function getAccountRights() {
        $selectAccount = $this->db->prepare
        ("SELECT `user_id`, `user_email`, `job_name`, `job_executive`
            FROM `admin_rights`
            ORDER BY user_id ASC");
        $selectAccount->setFetchMode(PDO::FETCH_ASSOC);
        $selectAccount->execute();
        return $selectAccount->fetchAll();
    }
}

$checkAccount = new CheckAccount();
