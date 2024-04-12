<?php
session_start(); // Start the session

include("../settings/connection.php");
if (!isset($_SESSION['uid'])) {
    exit; 
}
$uid = $_SESSION['uid'];
$sql = "SELECT CONCAT(fname, ' ', lname) AS full_name FROM Users WHERE uid = ?";
$st = $con->prepare($sql);
$st->bind_param("i", $uid);

$st->execute();


$result_fullname = $st->get_result();

$fullname_row = $result_fullname->fetch_assoc();


if ($fullname_row) {

    $fullname = $fullname_row['full_name'];
 
    echo "<p class='left-nav-color'>" . htmlspecialchars($fullname) . "</p>";
} 
?>
