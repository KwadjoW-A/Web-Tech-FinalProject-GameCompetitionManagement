<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_schedule_competition_style.css">

    <title>Dashboard</title>
</head>
<body>
<div class = "row">
    <div class = "column left column-left" >


        <div class= "profile-info">
            <img src="" alt="">
            <div class = "placeholder-img">
                <svg xmlns="http://www.w3.org/2000/svg" width="143" height="138" viewBox="0 0 143 138" fill="none">
                    <ellipse cx="71.5" cy="69" rx="71.5" ry="69" fill="#D9D9D9"/>
                </svg>
            </div>
            <?php
                include("../action/show_full_name_action.php");
            ?>
            <hr>
            <p class= "v">Organizer</p>
        </div>
        <div class = "nav">
            <a id = "id-dash" hrefs= "../admin/admin_dash_view.php"><p>Dashboard</p></a>
            <a href="../admin/admin_manage_competition_view.php"><p >Manage Competition</p></a>
            <a href=""><p>Schedule Competition</p></a>
        </div>
        <div class= "nav-foot">
            <a href=""><p>Settings</p></a>
            <a href="../login/logout_view.php"><p id ="link-logout">Logout</p></a>

    </div>
    </div>


    <div class = "column right column-right">
        
        <p  class= "title">Schedule Competition</p>

         <div class = "form-comp">
         <form action="../action/schedule_a_competition_action.php" method="post">
                <label for="competition_title">Competition Title:</label><br>
                <input type="text" id="competition_title" name="competition_title" required><br>

                <label for="description">Description:</label><br>
                <textarea id="description" name="description" rows="8" cols="80" required></textarea><br>

                <label for="game_name">Name of the Game:</label><br>
                <input type="text" name = "game_name" required><br>

                <label for="rules">Rules:</label><br>
                <textarea id="rules" name="rules" rows="8" cols="80" required></textarea><br>


                <label for="registration_deadline">Registration Deadline:</label><br>
                <input type="date" id="registration_deadline" name="registration_deadline" required><br>

                <label for="location">Location:</label><br> 
                <input type="text" id="location" name="location" required><br> <! -- use api-- >

                <label for="player_limit">Player Limit:</label><br>
                <input type="number" id="player_limit" name="player_limit" min="0" required><br>

                <button type="submit" name= "submit-comp">Submit</button>
        </form>
         </div>


    </div>
</div>

</body>
</html>