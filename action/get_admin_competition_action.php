<?php
include("../function/list_admin_competition_fxn.php");


$listcomp = ListAdminCompetition();

    foreach($listcomp as $comp) {
        echo "<tr>";
    
        echo "<td>".$comp['competition_title'] . "</td>";
        echo "<td>".$comp["date_posted"] . "</td>";
        echo "<td>".$comp["player_limit"] . "</td>";
        echo "<td> <a class = 'status_comp' href = '../action/change_competition_status_action.php?id=" . $comp["cid"] ." ' >".$comp["status"] . " </a></td>";
        echo "<td>
                <span> | Delete </span>
                <a href = '../action/delete_competition_action.php?id=".$comp['cid']."' >
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-trash-fill' viewBox='0 0 16 16'>
                        <path d='M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0'/>
                    </svg>
                </a>
                <span>| View Details |</span>
                <a href = '../admin/admin_view_competition_details_view.php?id=".$comp['cid']."'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-eye-fill' viewBox='0 0 16 16' >
                        <path d='M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0'/>
                        <path d='M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8m8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7'/>
                    </svg>
                </a>
                <span> View Player Request |</span>
                <a href= '../admin/admin_manage_player_request_view.php?id=".$comp['cid']."'>
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-fill' viewBox='0 0 16 16'>
                        <path d='M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6'/>
                    </svg>
                </a>
             </td>";
    
    
    
    
        echo "</tr>";
    
    
    
    
    }

?>
