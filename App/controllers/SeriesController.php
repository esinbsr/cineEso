<?php

namespace Controllers;

use Views\Series;
use Models\SeriesModel;

class SeriesController {

    protected $seriesView;
    protected $seriesModel;


    public function __construct() {

        $this->seriesView = new Series;
        $this->seriesModel = new SeriesModel;

    }

    // view
    public function formSeries() {
        $data = $this->seriesModel->getSeries();
        $this->seriesView->seriesForm($data);
    }

    // model
    public function modelSeries() {
        $this->seriesModel->getSeries();

    }

}