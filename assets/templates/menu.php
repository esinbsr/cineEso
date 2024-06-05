<?php
if(isset($_SESSION['id'])) {
    echo '
    <nav class="menu">
        <div class="menu-content">
            <a href="movies">Movies</a>
            <a href="series">Series</a>
            <a href="animations">Animations</a>
            <a href="logout">Logout</a>
            <a href="account">My account</a>
        </div>
    </nav>
    ';
} else {
    echo '
    <div class="main-container">
    <nav class="menu-login">
        <div class="menu-content">
            <a href="register">Registration</a>
            <a href="login">Login</a>
        </div>
    </nav>
    </div>
    ';
}
?>