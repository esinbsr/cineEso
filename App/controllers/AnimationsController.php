<?php

namespace Controllers;

use Views\Animations;
use Models\AnimationsModel;



class AnimationsController {

    protected $animView;
    protected $animModel;


    public function __construct() {
        $this->animView = new Animations;
        $this->animModel = new AnimationsModel;
    }


    // vue
    public function animationView() {

        $data = $this->animModel->getAnimations();
        $this->animView->animations($data);
      
    }

    // method
    public function animationModel() { 
        $data = $this->animModel->getAnimations();
    }
}