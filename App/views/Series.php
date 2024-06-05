<?php 

namespace Views;

class Series {
    public function seriesForm($data){

        echo '
        <h2 class="h2-center"> Series </h2>
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
            <tbody>
            ';
            foreach($data as $series) {
            echo '
                <tr>
                    <td> ' . $series['title']  . '  </td>
                    <td> ' . $series['genre'] . ' </td>
                    <td> ' . $series['release_date'] . ' </td>
                    <td> ' . $series['description'] . ' </td>
                    <td><a href="seriesDetails/' . $series['id'] . '">Details</a></td>
                </tr>
                ';  
            }
            echo '
            </tbody>
            </table>
            </div>';    
    }

}


