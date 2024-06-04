<?php

namespace Models;

use App\Database;

class AnimationsDetailsModel {

    protected $db;

    public function __construct() {
        $this->db = new Database;
    }


    public function getAnimationsDetails($id_animations) {

        try {


            $request = "SELECT animation.*, themeAnimation.name AS theme, country.name AS country FROM animation JOIN themeAnimation ON animation.id_theme = themeAnimation.id JOIN country ON animation.id_country = country.id WHERE animation.id = ?";
            
            $s = $this->db->getConnection()->prepare($request);
            $s->execute([$id_animations]);

            return $s->fetchAll(\PDO::FETCH_ASSOC);
            
        } catch(\PDOException $e) {
            throw new \Exception('Error fetching movie details: ' . $e->getMessage());

        }
    }

}