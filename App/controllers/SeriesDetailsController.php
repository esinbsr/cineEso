<?php

namespace Controllers;

use Views\SeriesDetails;
use Models\SeriesDetailsModel;

class SeriesDetailsController {

    
    protected $seriesDetailsView;
    protected $seriesDetailsModel;
    
    public function __construct() {
        $this->seriesDetailsView = new SeriesDetails;
        $this->seriesDetailsModel = new SeriesDetailsModel;
    }


    // view
    public function seriesDetailsForm($id_series) {

        $data = $this->seriesDetailsModel->getSeriesDetails($id_series);
        $this->seriesDetailsView->formSeriesDetails($data);
    }
}