<?php

include("../../api/CRUD.php");

$singleUserDataArray = readUser($_SESSION['idx']);
$name = $singleUserDataArray['first_name'] . " " . $singleUserDataArray['last_name'];

function getScoresByUserIdxEchoScoresToTable($userIDX) {
    $scores = readScores($userIDX);
    while($score = $scores->fetch_assoc()) {
        $gunName = $score['make']." ".$score['modal']." ".$score['trim'];
        $scoreOutOf = $score['score']. "/ ". $score['out_of'];
        echo "<tr>";
        echo "<th scope=row>" . $score['date'] . "</th>";
        echo "<td>" . $gunName . "</td>";
        echo "<td>" . $score['discipline_name'] . "</td>";
        echo "<td>" . $scoreOutOf . "</td>";
        echo "</tr>";
    }
}



