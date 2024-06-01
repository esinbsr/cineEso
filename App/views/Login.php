<?php

namespace Views;

class Login {

    public function formLogin() {
            echo '
                <h2>Login</h2>
                <form action="login" method="post">
                    <label for="email">Email</label>

                    <input type="email" name="email" id="email" required>
                    <label for="pswd">Password</label>

                    <input type="password" name="pswd" id="pswd" required>

                    <button type="submit">Login</button>
                </form>
            ';
        }
    }

