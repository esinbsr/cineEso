<?php

namespace Views;

class Account {

    public function formAccount($userData = []) { //si aucun argument n'est passé à la méthode, $userData sera initialisé comme un tableau vide

        $firstname = isset($userData['firstname']) ? htmlspecialchars($userData['firstname']) : ''; //vérifie si la clé 'firstname' existe dans le tableau $userData,  SSi la clé 'firstname' existe, la valeur échappée est assignée à $firstname. Sinon, une chaîne vide ('') est assignée.
        $lastname = isset($userData['lastname']) ? htmlspecialchars($userData['lastname']) : '';
        $email = isset($userData['email']) ? htmlspecialchars($userData['email']) : '';

        echo '
        <h2>Modify my account</h2>
        <form method="post" action="?action=saveUser">

            <label for="firstname">Firstname</label>
            <input type="text" name="firstname" id="firstname" value="' . $firstname . '">
        
            <label for="lastname">Lastname</label>
            <input type="text" name="lastname" id="lastname" value="' . $lastname . '">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="' . $email . '">

            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="' . $email . '">
            
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="' . $email . '">


            <button>Save</button>
        </form>';
    }

}
