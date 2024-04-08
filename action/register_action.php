<?php
include ("../settings/connection.php");
echo "K";
if (isset($_POST["signup-btn"])) {
    $fname = mysqli_real_escape_string($con, $_POST['fname']);
    echo "ec";
    $lname = mysqli_real_escape_string($con, $_POST['lname']);
    $gender = $_POST['gender'];
    $tel = mysqli_real_escape_string($con, $_POST['pnumber']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $role = $_POST["role"];
    $passwd = $_POST['password']; 
    $repasswd = $_POST['repassword'];

    // Check for empty fields
    if (empty($fname) || empty($lname) || ($gender!="0" && $gender !="1") || empty($tel) || empty($email) || empty($role) || empty($passwd) || empty($repasswd)) {
        header("Location: ../login/register_view.php?msg=Please fill all fields");
        exit;
    }

    // Check if passwords match
    if ($passwd !== $repasswd) {
        header("Location: ../login/register_view.php?msg=Passwords do not match");
        exit;
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../login/register_view.php?msg=Invalid email format");
        exit;
    }



    // Check if email already exists
    $sql_check_email = "SELECT * FROM Users WHERE email = ?";

    $stmt_check_email = $con->prepare($sql_check_email);

    $stmt_check_email->bind_param("s", $email);


    $stmt_check_email->execute();

    $result_check_email = $stmt_check_email->get_result();


    if ($result_check_email->num_rows > 0) {
        header("Location: ../login/register_view.php?msg=Email already has an account");
        exit();
    }


    // Hash the password
    $hashed_password = password_hash($passwd, PASSWORD_DEFAULT);



    $sql = "INSERT INTO Users (rid, fname, lname, gender, tel, email, password) VALUES (?,?,?,?,?,?,?)";

    $stmt = $con->prepare($sql);
    

    $stmt->bind_param("issssss", $role, $fname, $lname, $gender, $tel, $email, $hashed_password);
    

    if ($stmt->execute()) {
    

        header("Location: ../login/login_view.php");
        exit();
    } else {
        header("Location: ../login/register_view.php?msg=An error occurred");
        exit();
    }
}

?>