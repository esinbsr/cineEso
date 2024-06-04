<?php
namespace Models;

use App\Database;

class LoginModel {
    protected $db;

    public function __construct() {
        $this->db = new Database;
    } 

    public function authenticate($email, $password) {

        try {
            $request = "SELECT * FROM user WHERE email = :email";

            $s = $this->db->getConnection()->prepare($request);

            $s->bindParam(':email', $email);

            $s->execute();

            $user = $s->fetch(\PDO::FETCH_ASSOC);
            
            $_SESSION['id'] = $user['id'];
            $_SESSION['user'] = $user['email'];
            $_SESSION['firstname'] = $user['firstname'];

            if ($user && password_verify($password, $user['pswd'])) {
                return true;
            } else {
                return false;
            }
        
    } catch (\PDOException $e) {
        throw new \Exception('Error fetching user details: ' . $e->getMessage());
        return false;
    }
    }
}
?>