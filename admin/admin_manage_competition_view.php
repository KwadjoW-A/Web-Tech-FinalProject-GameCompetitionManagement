<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/admin_manage_competition_style.css">

    <title>Manage Competition</title>
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
            <a href=""><p >Manage Competition</p></a>
            <a href="../admin/admin_schedule_competition_view.php"><p>Schedule Competition</p></a>
        </div>
        <div class= "nav-foot">
            <a href=""><p>Settings</p></a>
            <a href="../login/logout_view.php"><p id ="link-logout">Logout</p></a>

    </div>
</div>

    <div class = "column right column-right">
        <!-- This should have the search -->
        <!-- under action you have no edit creat confusion delete and veiw details, Update status, Veiw player requests -->
        <form id="searchForm" action="" method="GET">
            <input type="text" id="searchquery" name="searchquery" placeholder="Enter your search query">
            <button type="submit">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
            </svg>
            </button>
        </form>

        <p  class= "title">Manage Competition</p>
        <table>
        <thead>
                    <tr>
                        <th>Title of Competition</th>
                        <th>Date posted</th>
                        <th>Player limit</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
        </thead>
        <tbody id="tableBody">

        </tbody>

    </table>


    </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>

$(document).ready(function() {
    // Function to load competitions
    function loadCompetitions() {
        $.ajax({
            type: 'GET',
            url: '../action/get_admin_competition_action.php', // URL to load competitions
            success: function(response) {
                // Update the table with the competitions HTML
                $('#tableBody').html(response);
            }
        });
    }

    // Call loadCompetitions function initially
    loadCompetitions();

    // Search form submission
    $('#searchForm').submit(function(event) {
        event.preventDefault();

        var searchquery = $('#searchquery').val();

        $.ajax({
            type: 'GET',
            url: '../action/get_admin_search_competition_action.php?searchquery=' + searchquery,
            data: { searchquery: searchquery },
            success: function(response) {
                $('#tableBody').html(response);
            }
        });
    });
});

</script>

</html>