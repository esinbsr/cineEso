<?php

namespace Views;

class Account {

    public function formAccount($userData = []) {

        $firstname = isset($userData['firstname']) ? htmlspecialchars($userData['firstname']) : '';
        $lastname = isset($userData['lastname']) ? htmlspecialchars($userData['lastname']) : '';
        $email = isset($userData['email']) ? htmlspecialchars($userData['email']) : '';
        // $email = isset($userData['email']) ? htmlspecialchars($userData['email']) : '';

        echo '
        <h2>Modify my account/h2>
        <form method="post" action="">

            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" value="' . $firstname . '">
        
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" value="' . $lastname . '">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="' . $email . '">

            <label for="pswd">Password</label>
            <input type="password" name="pswd" id="pswd">

            <button>Enregistrer</button>
        </form>';
    }

}
