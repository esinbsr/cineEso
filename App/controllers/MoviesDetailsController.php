<?php

namespace Controllers;

use Views\MoviesDetails;
use Models\MoviesDetailsModel;


class MoviesDetailsController {
    protected $moviesDetailsView;
    protected $moviesDetailsModel;

    public function __construct() {
        $this->moviesDetailsView = new MoviesDetails;
        $this->moviesDetailsModel = new MoviesDetailsModel;

    }

     // Method for the view:
        public function moviesDetailsForm($movieId) { 
            $data = $this->moviesDetailsModel->getMoviesDetails($movieId); 
            $this->moviesDetailsView->formMoviesDetails($data);
        }
        

    // Method for the model:
        public function moviesDetailsSave() {
            $this->moviesDetailsModel->getMoviesDetails();
        }

}

