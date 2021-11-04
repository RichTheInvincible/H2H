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


</main>

<?php include 'view/footer.php' ?>
