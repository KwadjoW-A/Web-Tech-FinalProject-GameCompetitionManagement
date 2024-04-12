<?php
include("../function/list_all_competition_fxn.php");

$data = ListAllCompetition();

foreach($data as $row) {
    echo '<div class="competition-info">';
    echo '<h2>' . $row['competition_title'] . '</h2>';
    echo '<p><strong>Game Name:</strong> ' . $row['game_name'] . '</p>';
    echo '<p><strong>Description:</strong> ' . $row['description'] . '</p>';
    echo '<p><strong>Rules:</strong> ' . $row['rules'] . '</p>';
    echo '<p><strong>Date Posted:</strong> ' . $row['date_posted'] . '</p>';
    echo '<p><strong>Registration Deadline:</strong> ' . $row['registration_deadline'] . '</p>';
    echo '<p><strong>Date Edited:</strong> ' . $row['date_edited'] . '</p>';
    echo '<p><strong>Status:</strong> ' . $row['status'] . '</p>';
    echo '<p><strong>Location:</strong> ' . $row['location'] . '</p>';
    echo '<p><strong>Player Limit / Number of Players:</strong> ' . $row['player_limit'] . ' / ' . $row['num_of_players'] . '</p>';
    // Adding the registration links
    echo '<hr style = "width:100%;">';
    echo '<p><a href="../view/play_register_for_competition_view.php?id='.$row['cid'].'" >Register</a></p>';
    echo '<hr style = "width:100%;">';
    echo '</div>';
}
?>
