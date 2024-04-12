<?php
include("../settings/connection.php");
session_start();
if (isset($_POST["reg"])) {
    $cid = $_POST['cid'];
    $uid = $_SESSION['uid'];
    $reason = $_POST['reason'];

    // Check if the user has already applied
    $check_query = "SELECT * FROM Participant WHERE cid = ? AND uid = ?";
    $check_stmt = $con->prepare($check_query);
    $check_stmt->bind_param("ii", $cid, $uid);
    $check_stmt->execute();
    $check_result = $check_stmt->get_result();
    
    if ($check_result->num_rows > 0) {
        // User has already applied
        header("Location: ../view/play_dash_view.php?msg=User already applied");
        exit();
    } else {
        // User hasn't applied, proceed with insertion
        $sql = "INSERT INTO Participant (cid, uid, reason) VALUES (?, ?, ?)";
        $stmt = $con->prepare($sql);
        $stmt->bind_param("iis", $cid, $uid, $reason);

        if ($stmt->execute()) {
            // Insertion successful
            header("Location: ../view/play_dash_view.php");
            exit();
        } else {
            // Error occurred during insertion
            header("Location: ../view/play_dash_view.php?msg=An error occurred");
            exit();
        }
    }
}
?>
