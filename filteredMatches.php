<?php include 'view/header.php' ?>

<main>


  <form action='.' method='post'>
    <div id='left'>
      <select name='playerTag'>
        <option value="Choose a Player">Choose a Player</option>
        <?php  foreach($players as $player) : ?>
          <option value='<?php echo $player['n']; ?>'>
            <?php echo $player['n']; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <br>
    <div id='right'>
      <select name='playerTag2'>
        <option value="Choose a Player">Choose a Player</option>
        <?php  foreach($players2 as $player2) : ?>
          <option value='<?php echo $player2['n']; ?>'>
            <?php echo $player2['n']; ?>
          </option>
        <?php endforeach; ?>
      </select>
    </div>
    <input type='hidden' name='action' value='searchH2H'/>
    <input id='button' type='submit' value='Go!' />
  </form>

  <br>

  <table class='record'>
    <tr>
      <td class='left'><?php echo $leftPlayer; ?></td>
      <td class='center'>
        <?php
          if ($leftPlayer != 'Choose a Player' && $rightPlayer != 'Choose a Player') {
            $leftPlayerCount = 0;
            $rightPlayerCount = 0;
            foreach ($records as $record){
              if ($record['winner'] == $leftPlayer) {
                $leftPlayerCount++;
              }
              else if ($record['winner'] == $rightPlayer) {
                $rightPlayerCount++;
              }
            }
            echo $leftPlayerCount . " - " . $rightPlayerCount;
          }
        ?>
      </td>
      <td class='right'><?php echo $rightPlayer; ?></td>
    </tr>
  </table>

  <br>

  <table class='data'>
    <tr>
      <th>Tournament</th>
      <th>Winner</th>
      <th>Loser</th>
      <th>Date</th>
    </tr>
    <?php foreach ($matches as $match) : ?>
    <tr>
      <td><?php echo $match['tournament']; ?></td>
      <td><?php echo $match['winner']; ?></td>
      <td><?php echo $match['loser']; ?></td>
      <td><?php echo $match['matchDate']; ?></td>
    </tr>
    <?php endforeach; ?>
  </table>

</main>

<?php include 'view/footer.php' ?>
