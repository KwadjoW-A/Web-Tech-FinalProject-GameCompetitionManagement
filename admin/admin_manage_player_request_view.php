<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_manage_player_request_style.css">

    <title>Manage Player Request</title>
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
        
        <p  class= "title">Dashboard</p>

        <table>
            <thead>
            <tr>
                <th>Name Of Player</th>
                <th>Name of Competition</th> 
                <th>Reason</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody id = "tbody">

                <?php
                    $cid = $_GET["id"];
                    include('../action/get_player_request_action.php');
                ?>

            </tbody>


        </table>


    </div>
</div>

</body>
</html>