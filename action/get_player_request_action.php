<?php

include("../function/list_player_request_fxn.php");


$listreq = ListPlayerRequest($cid);


foreach($listreq as $req) {

    $uid= $req["uid"];

    $sql = "SELECT CONCAT(fname, ' ', lname) AS full_name FROM Users WHERE uid = ?";


    $st = $con->prepare($sql);

    $st->bind_param("i", $uid);
    $st->execute();
    $result_fullname = $st->get_result();
    $fullname_row = $result_fullname->fetch_assoc();
    $fullname = $fullname_row['full_name'];

    $sqll = "SELECT competition_title FROM Competition WHERE cid = ?";


    $stt = $con->prepare($sqll);

    $stt->bind_param("i", $cid);
    $stt->execute();
    $result_comp = $stt->get_result();
    $comp_title = $result_comp->fetch_assoc();
    $title = $comp_title['competition_title'];



    echo "<tr>";

        echo "<td>". $fullname . "</td>";
        echo "<td>". $title . "</td>";
        echo "<td>". $req['reason'] . "</td>";
        if ($req['status']=="Pending"){
            echo "<td>". $req['status'] ."
                <a href= '../action/change_player_request_to_accept_action.php?id=".$req['uid']."'> <button>Accepted <button></a>
                <a href= '../action/change_player_request_to_reject_action.php?id=".$req['uid']." '> <button> Rejected</button> </a>
                 </td>"; 
        }
        else{
            echo "<td>
                    ".$req['status']."
                </td>";

        }
    echo "</tr>";







}





?>