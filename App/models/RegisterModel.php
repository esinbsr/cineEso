<?php

namespace Models;

use App\Database;

class RegisterModel {

    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function createUser() {

        $lastname = $_POST['lastname'];
        $firstname = $_POST['firstname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['pswd'], PASSWORD_BCRYPT); 
        $last = date("Y-m-d H:i:s");

        try {
            $pdo = $this->db->getConnection()->prepare("INSERT INTO user (firstname, lastname, email, pswd, last_connection) VALUES (?, ?, ?, ?, ?)");
            $pdo->execute([$firstname, $lastname,  $email, $password, $last]);

            echo "<h2>User successfully created</h2>";
        } catch (\PDOException $e) {
            echo "Error when creating user : " . $e->getMessage();
        }
    }

}
