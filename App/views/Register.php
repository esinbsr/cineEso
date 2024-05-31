<?php

namespace Views;

class Register {

    public function formUser() {
        echo '<h2>Inscription</h2>

        <form method="post" action="register">
            <label for="firstname">Firstname</label>
            <input type="text" id="firstname" name="firstname" value="">

            <label for="lastname">Lastname</label>
            <input type="text" id="lastname" name="lastname" value="">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" value="">

            <label for="pswd">Password</label>
            <input type="password" id="pswd" name="pswd" value="">

            <button type="submit">Registration</button>
        </form>';
    }
}
