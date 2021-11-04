<?php

function searchMatches($player1, $player2) {
    global $db;
    $query = "SELECT * FROM match_log
              WHERE (winner = '$player1' OR winner = '$player2') AND (loser = '$player1' OR loser = '$player2')
              ORDER BY matchDate desc";
    $searchMatches = $db->query($query);
    return $searchMatches;
}

function searchMatches1P($player){
  global $db;
  $query = "SELECT * FROM match_log
            WHERE (winner = '$player' OR loser = '$player')
            ORDER BY matchDate desc";
  $searchMatches = $db->query($query);
  return $searchMatches;
}

function getUniquePlayers() {
  global $db;
  $query = "SELECT winner AS n FROM match_log UNION SELECT loser FROM match_log ORDER BY n";
  $players = $db->query($query);
  return $players;
}

function getRecord($player1, $player2){
  global $db;
  $query = "SELECT * FROM match_log
            WHERE (winner = '$player1' OR winner = '$player2') AND (loser = '$player1' OR loser = '$player2')
            ORDER BY matchDate desc";
  $searchMatches = $db->query($query);
  return $searchMatches;
}


 ?>
