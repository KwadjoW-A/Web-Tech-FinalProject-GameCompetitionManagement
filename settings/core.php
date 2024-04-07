<?php

session_start();



function checklogin() {

    if (!isset($_SESSION['uid'])) {
        
        header("Location: ../login/login_view.php");
       
        die();
    }
}
function checkuserrole() {
    if (!isset($_SESSION['rid'])) {
        return false;
    } else {
        return $_SESSION['rid'];
    }
}

checklogin();
checkuserrole();
?>