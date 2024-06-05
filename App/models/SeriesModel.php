<?php

namespace Models;

use App\Database;

class SeriesModel {

    protected $db;

    public function __construct() {
        $this->db = new Database;
    }
    
    public function getSeries() {
        try {

        $request = "SELECT series.*, genre.name AS genre, country.name AS country FROM series JOIN genre ON series.id_genre = genre.id JOIN country ON series.id_country = country.id";

        $s = $this->db->getConnection()->query($request)->fetchAll(\PDO::FETCH_ASSOC);
        return $s;

        } catch(\PDOException $e) {
            throw new \Exception("Error fetching series data :" . $e->getMessage());
        }
    }
}