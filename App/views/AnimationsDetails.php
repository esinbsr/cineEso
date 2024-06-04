<?php

namespace Views;

class AnimationsDetails {

    public function animationsDetailsForm($data) {

        echo '
        <h2>Animations details details</h2>
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

                    echo ' <tr>';
                   echo ' <td>' . $animations['title'] . '</td>';
                   echo ' <td>' . $animations['theme'] . '</td>';
                   echo ' <td>' . $animations['release_date'] . '</td>';
                   echo ' <td>' . $animations['description'] . '</td>';
                   echo ' <td>' . $animations['studio'] . '</td>';
                   echo ' <td>' . $animations['author'] . '</td>';
                   echo ' <td>' . $animations['country'] . '</td>';
                   echo ' <td>' . '<a href="animations">Back</a>' . '</td>';
                }

                echo '
                </tr>
            </tbody>
        </table>
        ';
        
    }
}