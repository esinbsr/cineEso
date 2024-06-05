<?php
namespace Models;

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

            if ($user && password_verify($password, $user['pswd'])) {
                // Initialiser la session seulement si l'authentification est réussie
                $_SESSION['id'] = $user['id'];
                $_SESSION['user'] = $user['email'];
                $_SESSION['firstname'] = $user['firstname'];
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
// Initialiser la session seulement si l'authentification est réussie car l'initialisation des sessions pour des utilisateurs non authentifiés peut introduire des failles de sécurité. Si je configure une session même quand les informations d'identification sont incorrectes, des utilisateurs non autorisés pourraient accéder à des zones réservées

// L'authentification implique de vérifier si les informations d'identification fournies correspondent à celles stockées dans la base de données. Si cette vérification échoue, l'utilisateur ne devrait pas être considéré comme connecté, et aucune information de session ne devrait être enregistrée