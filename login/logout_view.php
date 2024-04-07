<?php

session_start();

unset($_SESSION['uid']);
unset($_SESSION['rid']);

header("Location: ../login/login_view.php");
exit();
