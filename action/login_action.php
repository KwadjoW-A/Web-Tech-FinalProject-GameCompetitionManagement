<?php
session_start();

include ("../settings/connection.php");

if (isset($_POST["signin-btn"])) {
    $email =  mysqli_real_escape_string($con,$_POST["email"]);
    $passwd = $_POST["password"];

    if (empty($email) || empty($passwd)) {
        header("location: ../login/login_view.php?msg=Please fill in all required fields.");
        exit();
    }

    $sql_query = "SELECT * FROM users WHERE email = ?";
    $stmt = $con->prepare($sql_query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if (password_verify($passwd, $row['password'])) {

            $_SESSION['uid'] = $row['uid'];
            $_SESSION['rid'] = $row['rid'];
            if ($_SESSION['rid'] == 2){
                header("Location: ../view/play_dash_view.php");
            }else if ($_SESSION['rid'] == 1){
                header("Location: ../admin/admin_dash_view.php");

            }
            exit();
        } else {
            header("Location: ../login/login_view.php?error=an_error_occured");
            exit();
        }
    } else {
        header("Location: ../login/login_view.php?error=an_error_occured");
        exit();
    }
} else {
    header("Location: ../login/login_view.php?error=An_error_occured");
    die();
}
?>
