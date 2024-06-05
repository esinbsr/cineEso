<?php

namespace Models;

use App\Database;

class AccountModel {
    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAccount($user_id) {

        try {
            $request = "SELECT lastname, firstname, email FROM user WHERE id = ?";
            $s= $this->db->getConnection()->prepare($request);
            $s->execute([$user_id]);
            $data =  $s->fetch(\PDO::FETCH_ASSOC);

            return $data;

        } catch (\PDOException $e) {
            throw new \Exception("Error fetching users data : " . $e->getMessage());
        }
    }

    public function updateUser($user_id, $firstname, $lastname, $email) {
        $last = date("Y-m-d H:i:s");
     
        try {
            $s = $this->db->getConnection()->prepare("UPDATE user SET firstname = ?, lastname = ?, email = ?, last_connection = ? WHERE id = ?");

            $s->execute([$firstname, $lastname, $email, $last, $user_id]);

            return true;
        } catch (\PDOException $e) {
            throw new \Exception("error when modifiying user: " . $e->getMessage());
        }
    }
}