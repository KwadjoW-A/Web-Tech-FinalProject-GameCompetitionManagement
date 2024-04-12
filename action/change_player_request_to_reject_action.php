<?php
include "../settings/connection.php";

if(isset($_GET['id'])) {
    $uid = $_GET["id"];

    $sql_check = "SELECT status FROM Participant WHERE uid = ?";
    $stmt_check = $con->prepare($sql_check);
    $stmt_check->bind_param("i", $uid);
    $stmt_check->execute();
    $result_check = $stmt_check->get_result();
    $status_check = $result_check->fetch_assoc();

    if ($status_check['status'] == "Rejected" || $status_check['status'] == "Accepted") {
        header("Location: ../admin/admin_manage_player_request_view.php?msg=already_been_rejected");
        exit();}
    else{
        $new_status = "Rejected";
       
        $sql_update = "UPDATE Participant SET status = ? WHERE uid = ?";
        $stmt_update = $con->prepare($sql_update);
        $stmt_update->bind_param("si", $new_status, $uid);
        $stmt_update->execute();
        
        
        if ($stmt_update->error) {
            echo "Error: " . $stmt_update->error;
        }
    

    
    header("Location: ../admin/admin_manage_player_request_view.php");
    exit();
}
} else {
    
    header("Location: ../admin/admin_manage_player_request_view.php?msg=an_error_occured");
    exit();
    
}

?>
