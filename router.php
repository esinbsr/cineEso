<?php

require_once('vendor/autoload.php');

use Controllers\MoviesController;
use Controllers\MoviesDetailsController;
use Controllers\AnimationsController;
use Controllers\AnimationsDetailsController;
use Controllers\RegisterController;
use Controllers\LoginController;
use Controllers\AccountController;
use Controllers\SeriesController;
use Controllers\SeriesDetailsController;


$action = $_REQUEST['action'] ?? NULL;

switch($action) {
    default: 
    if(isset($_SESSION['firstname'])) {

        echo 'Hello ' . $_SESSION['firstname'] . '!';
    }
break;
    
    // MOVIES

    case 'movies': 
        $movies = new MoviesController();
        $movies->moviesForm();
    break;

    case 'moviesDetails': 
        $movieId = $_GET['movieId'] ?? null; 
        $movies = new MoviesDetailsController();
        $movies->moviesDetailsForm($movieId);
    break;


    // ANIMATIONS

    case 'animations': 
      $animation = new AnimationsController();
      $animation-> animationView();
    break;

    case 'animationsDetails': 
        $id_animations= $_GET['animationId'] ?? NULL; //$_GET['animationId'] correspond à mon url dans le htaccess
       $animationsDetails = new AnimationsDetailsController();
       $animationsDetails->animationsView($id_animations);
    break;


    // SERIES

    case 'series': 
        $series = new SeriesController;
        $series->formSeries();
    break;

    case 'seriesDetails': 
        $idSeriesDetails = $_GET['seriesId'] ?? NULL;
        $seriesDetails = new SeriesDetailsController;
        $seriesDetails->seriesDetailsForm($idSeriesDetails);
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
            $login = new LoginController;
            if($_SERVER['REQUEST_METHOD'] === 'POST') {
                $login->userSave();
            } else {
                $login->loginForm();
            }
        break;

        case 'logout':
            $loginLogout = new LoginController();
            $loginLogout->logout();
        break;   

        case 'account' :
            
            $accountController = new AccountController();
            $accountController->updateForm();
        break;

        case 'accountModify' :
            
            $accountController = new AccountController();
            $accountController->userSave();
            
        break;
}
