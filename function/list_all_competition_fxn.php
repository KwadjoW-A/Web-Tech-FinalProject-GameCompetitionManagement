<?php
include("../settings/connection.php");

function ListAllCompetition(){
    global $con; 
    $sql = "SELECT * FROM Competition";
    
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