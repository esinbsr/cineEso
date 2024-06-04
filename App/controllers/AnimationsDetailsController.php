<?php

namespace Controllers;

use Views\AnimationsDetails;
use Models\AnimationsDetailsModel;

class AnimationsDetailsController {

    protected $animationsView;
    protected $animationsModel;


    public function __construct() {

        $this->animationsView = new AnimationsDetails;
        $this->animationsModel = new AnimationsDetailsModel;
    }


    // view 
    public function animationsView($id_animations) {
        $data = $this->animationsModel->getAnimationsDetails($id_animations);
        $this->animationsView->animationsDetailsForm($data);
    }
    
}