<?php

namespace Controllers;

use Views\Register;
use Models\RegisterModel;

class RegisterController {
    protected $userView;
    protected $userModel;

    public function __construct() {
        $this->userView = new Register;
        $this->userModel = new RegisterModel;
    }

    // Vue
    public function userView() {
        $this->userView->formUser();
    }
    
    // Modèle
    public function userModel() {
        $this->userModel->createUser();
    }
}
