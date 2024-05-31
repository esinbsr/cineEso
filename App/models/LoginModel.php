<?php

namespace Models;

use App\Database;


class Login {

    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    
}