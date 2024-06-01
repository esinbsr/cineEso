<?php
if(isset($_SESSION['user'])) {
    echo '
    <nav>
    <a href="movies">Movies</a>
    <a href="series">Series</a>
    <a href="animation">Animations</a>
    <a href="logout">Logout</a>
    <a href="account">My account</a>
    </nav>
    ';
} else {
    echo '
    <nav>
    <a href="register">Registration</a>
    <a href="login">Login</a>
    </nav>
    ';
}
?>