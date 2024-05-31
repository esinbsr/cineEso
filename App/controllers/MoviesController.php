<?php

namespace Controllers;

use Views\Movies;
use Models\MoviesModel;

class MoviesController {

    protected $moviesView;
    protected $moviesModel;

    public function __construct() {
        $this->moviesView = new Movies;
        $this->moviesModel = new MoviesModel;
    }

    // vue
    public function moviesForm() {
        $data = $this->moviesModel->getMovies();
        $this->moviesView->formMovies($data);
    }

    // model
    public function moviesSave() {
        $this->moviesModel->getMovies();
    }
}