<?php

namespace Controllers;

use Views\Account;
use Models\AccountModel;


class AccountController {

    protected $accountView;
    protected $accountModel;

    public function __construct() {
        $this->accountView = new Account;
        $this->accountModel = new AccountModel;
    }

    public function updateForm() {
        if (isset($_SESSION['user'])) {
            $user_id = $_SESSION['id'];

            $userData = $this->accountModel->getAccount($user_id);
            $this->accountView->formAccount($userData);
        } else {
            echo "User not logged in.";
        }
    }

    public function userSave() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_SESSION['id'])) {
                $user_id = $_SESSION['id'];
                $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : '';
                $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : '';
                $email = isset($_POST['email']) ? $_POST['email'] : '';

                $this->accountModel->updateUser($user_id, $firstname, $lastname, $email);

                // header("Location: ?action=account");
                echo '<hp>User modified successfully</hp>';
                echo '<a href="account">Back to my account</a>';
                exit();
            } else {
                echo "User not logged in.";
            }
        } else {
            $this->updateForm();
        }
    }
}
