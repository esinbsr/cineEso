<?php

require_once('vendor/autoload.php');

use Controllers\MoviesController;
use Controllers\MoviesDetailsController;
use Controllers\AnimationsController;
use Controllers\RegisterController;

$action = $_REQUEST['action'] ?? NULL;

switch($action) {
    
    case 'movies': 
        $movies = new MoviesController();
        $movies->moviesForm();
    break;

    case 'moviesDetails': 
        $movieId = $_GET['movieId'] ?? null; 
        $movies = new MoviesDetailsController();
        $movies->moviesDetailsForm($movieId);
    break;

    case 'series': 
        echo "Page des séries";
    break;

    case 'animation': 
      $animation = new AnimationsController();
      $animation-> animationView();
    break;


    case 'register' :
        $user = new RegisterController();

        // elle vérifie si quelqu'un a utilisé le formulaire et, si c'est le cas, elle insere les donnees dans la bdd
        if ($_SERVER['REQUEST_METHOD'] === 'POST') { // vérifie la méthode HTTP utilisée pour envoyer la requête. Si la méthode est POST, cela signifie que le formulaire d'inscription a été soumis

            $user->userModel(); // Si le formulaire a été soumis, traiter les données
        } else { // Sinon, l'utilisateur accède simplement à la page d'inscription pour la première fois et le formulaire doit lui être présenté
            $user->userView();
        }
        break;


        case 'login' :
            echo 'login';
        break;
    

    default: 
        echo "Page par défaut";
    break;
}
