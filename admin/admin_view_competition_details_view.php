
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_view_competition_details_style.css">

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
            <a id = "id-dash"><p>Dashboard</p></a>
            <a href="../admin/admin_manage_competition_view.php"><p >Manage Competition</p></a>
            <a href="../admin/admin_schedule_competition_view.php"><p>Schedule Competition</p></a>
        </div>
        <div class= "nav-foot">
            <a href=""><p>Settings</p></a>
            <a href="../login/logout_view.php"><p id ="link-logout">Logout</p></a>

    </div>
    </div>


    <div class = "column right column-right">
        
        <p  class= "title">View Competition Details: {Title of Competion}</p>

        <div class="container">
        <h1>Competition Information</h1>

        <?php
        include("../function/get_admin_a_competition_fxn.php");

        $cid = $_GET['id'];

        $comp = AAdminCompetition($cid);


    foreach($comp as $c){
        
        echo "<div class='competition-info'>
            <div>
                <span class='info-label'>Competition Title:</span> ".$c['competition_title']."
            </div>
            <div>
                <span class='info-label'>Description:</span> ".$c['description']."
            </div>
            <div>
                <span class='info-label'>Rules:</span> ".$c['rules']."
            </div>
            <div>
                <span class='info-label'>Date Posted:</span> ".$c['date_posted']."
            </div>
            <div>
                <span class='info-label'>Registration Deadline:</span> ".$c['registration_deadline']."
            </div>
            <div>
                <span class='info-label'>Date Edited:</span> ".$c['date_edited']."
            </div>
            <div>
                <span class='info-label'>Status:</span> ".$c['status']."
            </div>
            <div>
                <span class='info-label'>Location:</span> ".$c['location']."
            </div>
            <div>
                <span class='info-label'>Player Limit:</span> ".$c['player_limit']."
            </div>
            <div>
                <span class='info-label'>Number of Players:</span> ".$c['num_of_players']."
            </div>
        </div>";
    }
        ?>

        <!-- This will go in the backend -->


    </div>
</div>

</body>
</html>