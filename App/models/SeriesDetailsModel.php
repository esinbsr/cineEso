<?php

namespace Models;
use App\Database;

class SeriesDetailsModel {

    protected $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function getSeriesDetails($id_series) {


        try {
            // $id_series = 1;
            $request = "SELECT series.*, genre.name AS genre, country.name AS country FROM series JOIN genre ON series.id_genre = genre.id JOIN country ON series.id_country = country.id WHERE series.id = ?";
            
            $s = $this->db->getConnection()->prepare($request);
            $s->execute([$id_series]);

            return $s->fetchAll(\PDO::FETCH_ASSOC);  
            
        } catch(\PDOException $e) {
            throw new \Exception("error fetching series details data" . $e->getMessage());
        }
    }




}