<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="../css/login_view_style.css">
</head>
<body>
<div class="row">
    <div class="column left column-left">
        <h1 class="title">LOGIN</h1>
        <form action="../action/login_action.php" method="POST" onsubmit="return validateLoginForm()">

            <div class="row">
                <label for="email">Email</label><br>
                <input type="email" name="email" class="input-box" id="einput-full-width" required>
            </div>
            <div class="row" >
                <label for="password">Password</label><br>
                <input type="password" class="input-box" id="pinput-full-width" name="password" required>
            </div>
            <div class="row">
                <button id="signin-btn" type="submit" name="signin-btn">Sign In</button>
            </div>
        </form>
    </div>
    <div class="column right column-right">
        <h1 class="greeting">Welcome Back!</h1>
        <img src="../assets/istockphoto-1412059696-612x612.jpg">
        <div class="sgtext">Don't have an account? Create one.</div>
        <a href="../login/register_view.php"><button class="btn-in"> Sign Up</button></a>
    </div>
</div>
</body>
<script>
    function validateLoginForm() {
        var email = document.getElementById("einput-full-width").value;
        var password = document.getElementById("pinput-full-width").value;

        if (email.trim() === "") {
            alert("Please enter your email");
            return false;
        }

        if (password.trim() === "") {
            alert("Please enter your password");
            return false;
        }

        return true;
    }
</script>

</html>
