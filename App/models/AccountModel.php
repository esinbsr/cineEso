<?php

namespace Models;

use App\Database;

class AccountModel {

    public function __construct() {
        $this->db = new Database;
    }


    public function getAccount($user_id) {

        try {
            $request = "SELECT * FROM user WHERE id = ?";
            $s= $this->db->getConnection()->prepare($request);
            $s->execute([$user_id]);
            $data =  $s->fetch(\PDO::FETCH_ASSOC);
            return $data;
        } catch (\PDOException $e) {
            throw new \Exception("Erreur lors de la récupération des informations de l'utilisateur : " . $e->getMessage());
        }
    }
}