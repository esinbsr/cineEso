<?php

namespace Views;

class MoviesDetails {

    public function formMoviesDetails($data) {

        echo '
        <h2>Movies details</h2>
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release date</th>
                    <th>Description</th>
                    <th>Production</th>
                    <th>Realisator</th>
                    <th>duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>   
        ';

        foreach($data as $datas) {
            echo '
            <tr>
            <td> '. $datas['title'] . ' </td>
            <td> '. $datas['genre'] . ' </td>
            <td> '. $datas['release_date'] . ' </td>
            <td> '. $datas['description'] . ' </td>
            <td> '. $datas['production'] . ' </td>
            <td> '. $datas['realisator'] . ' </td>
            <td> '. $datas['duration'] . ' </td>

            <td><a href="movies"> back </a> </td>

        </tr>';
        }
    }
}