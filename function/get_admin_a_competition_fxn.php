<?php
session_start();
include "../settings/connection.php";

function AAdminCompetition($cid){
    global $con;

    // Check if $_SESSION["uid"] is set
    if (!isset($_SESSION["uid"])) {
        // Handle the case where $_SESSION["uid"] is not set
        return false;
    }

    $uid = $_SESSION["uid"];
    $sql = "SELECT * FROM Competition WHERE uid = ? and cid = ?";

    $st = $con->prepare($sql);

    $st->bind_param("ii" , $uid, $cid);

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
