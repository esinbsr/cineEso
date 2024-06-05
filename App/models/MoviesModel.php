<?php

namespace Models;

use App\Database;

class MoviesModel {

    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getMovies() {
        try {
            $request = "SELECT movies.*, genre.name AS genre FROM movies JOIN genre ON movies.id_genre = genre.id";

            $test = $this->db->getConnection()->query($request)->fetchAll(\PDO::FETCH_ASSOC);
            // var_dump($test);
           
            return $test;

            
        } catch(\PDOException $e) {
            throw new \Exception("Error fetching movies data : " . $e->getMessage());
        }
    }

    }