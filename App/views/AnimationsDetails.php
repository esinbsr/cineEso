<?php

namespace Views;

class AnimationsDetails {

    public function animationsDetailsForm($data) {

        echo '
        <h2 class="h2-center">Animations details</h2>
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

                foreach($data as $animations) {

                echo '
                <tr>
                   <td> ' . $animations['title'] . '</td>
                   <td> ' . $animations['theme'] . '</td>
                   <td> ' . $animations['release_date'] . '</td>
                   <td> ' . $animations['description'] . '</td>
                   <td> ' . $animations['studio'] . '</td>
                   <td> ' . $animations['author'] . '</td>
                   <td> ' . $animations['country'] . '</td>
                   <td><a href="animations">Back</a></td>
                </tr>
            </tbody>
        </table>
        </div>';
    }
        
    }
}