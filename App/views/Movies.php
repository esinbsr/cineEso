<?php

namespace Views;

class Movies {
    public function formMovies($data) {

        echo '
        <h2 class="h2-center"> Movies </h2>
        <div class="table">
        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release date</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>   ';

            if (!empty($data)) { 
                foreach($data as $datas) {
                    echo '
                        <tr>
                            <td> '. $datas['title'] . ' </td>
                            <td> '. $datas['genre'] . ' </td>
                            <td> '. $datas['release_date'] . ' </td>
                            <td> '. $datas['description'] . ' </td>

                            <td><a href="moviesDetails/' . $datas['id'] . '"> Details</a> </td>
                            
                        </tr>';
                }
            } else {
                echo '<tr><td colspan="5">No movies available</td></tr>'; 
            }
            echo '
            </tbody>
        </table>
        </div>';
    }
}
