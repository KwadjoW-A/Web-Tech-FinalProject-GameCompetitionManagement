<?php
session_start();
include "../settings/connection.php";



function ListPlayerRequest($cid){
    global $con;


    $sql = "SELECT * FROM Participant WHERE cid = ?" ;

    $st = $con->prepare($sql);

    $st->bind_param("i", $cid);

    // Execute the prepared statement
    if (!$st->execute()) {
        // Handle the case where the execute statement fails
        return false;
    }

    $records = array();

    // Fetch the results
    $result = $st->get_result();
    while ($row = $result->fetch_assoc()) {
        $records[] = $row;
    }

    return $records;
}

?>
