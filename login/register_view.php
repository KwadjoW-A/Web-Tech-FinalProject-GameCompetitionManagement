<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ADD ICON -->
    <title>Register</title>
    <link rel="stylesheet" type="text/css" href="../css/register_view_style.css">

</head>
<body>
<div class="row">
    <div class="column left column-left">
        <h1 class="title">REGISTER</h1>
        <form action="../action/register_action.php" method = "POST">

            <div class="row">
                <div class="column equal">
                    <label for="">First Name</label><br>

                    <input type="text" class="input-box" name="fname">
                </div>
                <div class="column equal">
                    <label for="">Last Name</label><br>

                    <input type="text" class="input-box" name= "lname">
                </div>
            </div>

            <div class="row">
                <div class="column equal">
                    <label for="">Gender</label><br>

                    <select name="gender" class="input-box" id = "ginput-full-width">
                        <option ></option>
                        <option value="0">Male</option>
                        <option value="1">Female</option>
                    </select>
                </div>
                <div class="column equal">

                    <label for="">Phone Number</label><br>

                    <input type="number" name="pnumber" class="input-box">

                </div>
            </div>


            <div class="row">
                <label for="email">Email</label><br>

                <input type="text" name="email" class="input-box" id = "einput-full-width">
            </div>
            <div class="row">
                <label for="">Are you a player or an organiser?</label><br>

                <select name="role" class="input-box" id = "rinput-full-width">
                    <option ></option>
                    <option value=1 >An organiser</option>
                    <option value=2  >A competitor</option>
                </select>
            </div>

            <div class="row" >
                <label for="">Password</label><br>

                <input type="password" class="input-box" id = "pinput-full-width" name = "password">
            </div>

            <div class="row">
                <label for="">Confirm Password</label><br>

                <input type="password" id = "pinput-full-width" class="input-box" name = "repassword">
            </div>

            <div class="row">
                <button id="signup-btn" type= "submit" name = "signup-btn">Sign Up</button>
            </div>
        </form>
    </div>

    <div class="column right column-right">
        <h1 class ="greeting">Welcome</h1>
        <img src="../assets/istockphoto-1412059696-612x612.jpg">
        <div class="sgtext" >Already have an account?</div>
        <a href="../login/login_view.php"><button  class = "btn-in"> Sign In</button></a>

    </div>
</div>
</body>
</html>
