<?php
include "../settings/connection.php";

if(isset($_GET['id'])) {
    $comp_id = $_GET["id"];

    $sql_check = "SELECT status FROM Competition WHERE cid = ?";
    $stmt_check = $con->prepare($sql_check);
    $stmt_check->bind_param("i", $comp_id);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    $status_check = $result_check->fetch_assoc();

    if ($status_check['status'] == "Available") {
        $new_status = "Unavailable";
    } elseif ($status_check['status'] == "Unavailable") {
        $new_status = "Available";
    }

    if ($new_status !== null) {
       
        $sql_update = "UPDATE Competition SET status = ? WHERE cid=?";
        $stmt_update = $con->prepare($sql_update);
        $stmt_update->bind_param("si", $new_status, $comp_id);
        $stmt_update->execute();
        
        
        if ($stmt_update->error) {
            echo "Error: " . $stmt_update->error;
        }
    }

    
    header("Location: ../admin/admin_manage_competition_view.php");
    exit();
} else {
    
    header("Location: ../admin/admin_manage_competition_view.php");
    exit();
}
?>
