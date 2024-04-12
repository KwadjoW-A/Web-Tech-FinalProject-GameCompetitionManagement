<?php
include("../settings/connection.php");

function SearchAdminCompetition($searchquery){
    global $con; 
    $sql = "SELECT * FROM Competition WHERE competition_title LIKE '%" . $searchquery . "%' ";
    
    $st = $con->query($sql);

    $records = array();

    if ($st !== false) {
        if ($st->num_rows > 0) {
           while($row = $st->fetch_assoc()){
               $records[] = $row;
           }
        }
    }
    return $records;
}


?>