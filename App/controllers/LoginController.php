<?php

namespace Controllers;

use Views\Login;
use Models\LoginModel;

class LoginController {

    protected $loginView;
    protected $loginModel;

    public function __construct() {
        $this->loginView = new Login;
        $this->loginModel = new LoginModel;
    }

    public function loginView() {
        $this->loginView->formLogin();
    }

    public function loginModel() {
        if (isset($_POST['email']) && isset($_POST['pswd'])) {
            $email = $_POST['email'];
            $password = $_POST['pswd'];

            $result = $this->loginModel->getUser($email, $password);

            if ($result) {
                $_SESSION['user'] = $email;
                header("Location: ?action=dashboard");
                exit();
            } else {
                echo "Invalid email or password.";
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
