<?php

namespace Models;

use App\Database;


class AnimationsModel {
    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAnimations() {
        try {
            $request = "SELECT animation.*, themeAnimation.name AS themeAnimation, country.name AS country FROM animation JOIN  themeAnimation ON  animation.id_theme = themeAnimation.id JOIN country ON animation.id_country = country.id";

            $test = $this->db->getConnection()->query($request)->fetchAll(\PDO::FETCH_ASSOC);

            //  var_dump($test);

            return $test;

        }catch(\PDOException $e) {
            throw new \Exception('Error fetching animations data :' . $e->getMessage());
        }


    }
}