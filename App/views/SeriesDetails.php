<?php

namespace Views;

class SeriesDetails {

    public function formSeriesDetails($data) {

        echo '

        <h2 class="h2-center">Series details</h2>
        <div class="table">

        <table>
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Genre</th>
                    <th>Release date</th>
                    <th>Description</th>
                    <th>Production</th>
                    <th>Realisator</th>
                    <th>Duration</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            ';

            foreach($data as $seriesDetails) {
                echo '
                <tr>
                    <td> ' . $seriesDetails['title'] . '</td>
                    <td> ' . $seriesDetails['genre'] . '</td>
                    <td> ' . $seriesDetails['release_date'] . '</td>
                    <td> ' . $seriesDetails['description'] . '</td>
                    <td> ' . $seriesDetails['production'] . '</td>
                    <td> ' . $seriesDetails['realisator'] . '</td>
                    <td> ' . $seriesDetails['duration'] . '</td>
                    <td><a href="series">Back</a></td>
                </tr>
                </tbody>
                </table>
                </div>
                ';
            }
    }

}

