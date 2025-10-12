<?php
require "header.php";
require "data.php";

$id = $_GET["id"];
// $team = $teams[$id];

?>

<div class="team-info">
    <h1 class="name"><?php echo $id; ?></h1>
    <?php foreach ($teams as $team) { ?>

        <div class="league-info">
            <h2 class="league-title">League:</h2>
            <!-- not updating for each team -->
            <p><?php echo $team['league']; ?></p>
        </div>
        <div class="uefa-info">
            <h2>UEFA Coefficient Ranking:</h2>
            <p><?php echo $team['uefa-coefficient-ranking']; ?></p>
        </div>
        <div class="city-info">
            <h2>City:</h2>
            <p><?php echo $team['city']; ?></p>
        </div>
        <div class="opponents-info">
            <h2>Opponents:</h2>
            <ul>
                <!-- need to figure out how to loop through opponents in multidimensional array -->
                <?php foreach ($team as $opponents => $opponent) { ?>
                    <li><?php echo $opponents['opponents']; ?></li>
                <?php } ?>
            </ul>
        </div>
    <?php } ?>
</div>

<?php require "footer.php";
