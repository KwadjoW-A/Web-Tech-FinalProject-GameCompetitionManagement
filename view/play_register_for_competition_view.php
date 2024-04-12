<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/play_dash_style.css">

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
            <p class= "v">Competitor</p>
        </div>
        <div class = "nav">
            <a id = "id-dash"><p>Dashboard</p></a>
            <a href="../view/play_view_competition_applied_view.php"><p>Competitions Applied To</p></a>

        </div>
        <div class= "nav-foot">
            <a href="../login/logout_view.php"><p id ="link-logout">Logout</p></a>

    </div>
    </div>


    <div class = "column right column-right">
        
        <p  class= "title">Register for Competitions</p>
        <?php 
        $cid = $_GET['id'];
        
        echo '<form action="../action/register_for_competition_action.php" method="post">';
            echo '<input type="hidden" name="cid" value="' . $cid . ' hidden">';
            echo '<label for="reason">Reason for Applying:</label><br>';
            echo '<textarea id="reason" name="reason" rows="8" cols="80"></textarea><br>';
            echo '<input type="submit" name = "reg">';
        echo '</form>';



        ?>





    </div>
</div>

</body>
</html>