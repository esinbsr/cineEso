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

        try {
            $pdo = $this->db->getConnection()->prepare("INSERT INTO user (firstname,lastname, email, pswd) VALUES (?, ?, ?, ?)");
            $pdo->execute([$firstname, $lastname,  $email, $password]);
            echo "<h2>User successfully created</h2>";
        } catch (\PDOException $e) {
            echo "Error when creating user : " . $e->getMessage();
        }
    }

}
