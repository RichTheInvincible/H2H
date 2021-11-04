<?php
require('model/database.php');
require('model/players.php');

if (isset($_POST['action'])) {
  $action = $_POST['action'];
}
else {
  $action = 'head2head';
}

if ($action == 'head2head') {
  $players = getUniquePlayers();
  $players2 = getUniquePlayers();

//$matches = getMatches();
  include('head2head.php');
}
else if ($action == 'searchH2H') {
  // get all the players for the dropdowns (temp)
  $players = getUniquePlayers();
  $players2 = getUniquePlayers();

  $leftPlayer = $_POST['playerTag'];
  $rightPlayer = $_POST['playerTag2'];

  if ($leftPlayer == 'Choose a Player' && $rightPlayer == 'Choose a Player') {
    include('head2head.php');
  }
  else if ($leftPlayer == 'Choose a Player'){
    $matches = searchMatches1P($rightPlayer);
    include('filteredMatchesSingle.php');
  }
  else if ($rightPlayer == 'Choose a Player'){
    $matches = searchMatches1P($leftPlayer);
    include('filteredMatchesSingle.php');
  }
  else{
    $matches = searchMatches($leftPlayer, $rightPlayer);
    $records = getRecord($leftPlayer, $rightPlayer);
    include('filteredMatches.php');
  }
}
?>
