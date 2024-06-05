<?php
namespace Controllers;

use Models\LoginModel;
use Views\Login; 

class LoginController {

    protected $loginView;
    protected $loginModel;

    public function __construct() {
        $this->loginView = new Login;
        $this->loginModel = new LoginModel;
    }

    // view
    public function loginForm() {
        $this->loginView->formLogin();
    }

    // model
    public function userSave() {
        if (isset($_POST['email']) && isset($_POST['pswd'])) {
            $email = $_POST['email'];
            $password = $_POST['pswd'];

            $result = $this->loginModel->authenticate($email, $password);

            if ($result) {
                // Connexion réussie
                
                echo "Login successful!";
                // Rediriger vers une page protégée ou le tableau de bord
                header("Location: ?action=dashboard");
                exit('exit');
            } else {
                // Connexion échouée
                echo "Invalid email or password.";
                echo '<a href="login">Try again</a>';

            }
        } else {
            echo "Email and Password are required.";
        }
    }

    public function logout() {
        session_unset();
        session_destroy();
        header("Location: login");
        exit();
    }
}
?>