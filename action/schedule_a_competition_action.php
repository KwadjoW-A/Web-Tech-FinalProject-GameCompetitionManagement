<?php
include("../settings/connection.php");
include("../settings/core.php");

if (isset($_POST["submit-comp"])) {

     $uid = $_SESSION['uid'];
     $title = mysqli_real_escape_string($con, $_POST['competition_title']);
    $game_name = mysqli_real_escape_string($con, $_POST['game_name']);
    $description = mysqli_real_escape_string($con,$_POST['description']);
    $rules = mysqli_real_escape_string($con,$_POST['rules']);
    $registration_deadline = $_POST['registration_deadline'];
    $location = mysqli_real_escape_string($con,$_POST['location']);
    $playerlimit = mysqli_real_escape_string($con,$_POST['player_limit']);

    $sql = "INSERT INTO Competition (uid, competition_title, game_name, description, rules, registration_deadline, location, player_limit) VALUES (?,?,?,?,?,?,?,?)";
    
    $stmt = $con->prepare($sql);

    $stmt->bind_param("issssssi", $uid, $title, $game_name, $description, $rules, $registration_deadline, $location, $playerlimit);

    if ($stmt->execute()) {
        header("Location: ../admin/admin_schedule_competition_view.php");
        exit();
    } else {
        echo "Error: " . $con->error;
    }

} else {
    echo "Submit button not clicked.";
}
?>
