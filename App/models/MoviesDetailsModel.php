<?php

namespace Models;
use App\Database;

class MoviesDetailsModel {

    protected $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getMoviesDetails($movieId) {
        try {
            // $movieId = 1;
            $request = "SELECT movies.*, genre.name AS genre, country.name AS country FROM movies JOIN genre ON movies.id_genre = genre.id JOIN country ON movies.id_country = country.id WHERE movies.id = ?";
    
            $s = $this->db->getConnection()->prepare($request);
            $s->execute([$movieId]); 
    
            return $s->fetchAll(\PDO::FETCH_ASSOC);
    
        } catch(\PDOException $e) {
            throw new \Exception('Error fetching movie details: ' . $e->getMessage());
        }
    }    

}