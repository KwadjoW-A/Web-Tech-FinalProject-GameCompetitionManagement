<?php

include "../settings/connection.php";


if(isset($_GET['id'])) {
   
    $comp_id = $_GET['id'];
 
    
    $sql = "DELETE FROM Competition WHERE cid = ?"; //it will cascasde delete


    $stmt = $con->prepare($sql);


    $stmt->bind_param("i", $comp_id);


    if ($stmt->execute()) {
        header("Location: ../admin/admin_manage_competition_view.php");
        exit();
    } else {
   
        echo "Error: " . $con->error;
    }
} else {

    header("Location: ../admin/admin_manage_competition_view.php?msg=something_went_wrong");
    exit();
}
?>
