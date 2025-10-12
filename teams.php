<?php
define("TITLE", $_GET["id"]);
require "header.php";
require "data.php";

$id = $_GET["id"];
// $team = $teams[$id];

?>

<div class="team-info">
    <?php foreach ($teams as $team => $data) {
        // foreach ($team as $key => $value) { 
    ?>
        <h1 class="name"><?php echo $id; ?></h1>
        <div class="logo-team-pg">

        </div>
        <div class="league-info">
            <h2 class="league-title">League:</h2>
            <p><?php echo $data['league']; ?></p>
        </div>
        <div class="uefa-info">
            <h2>UEFA Coefficient Ranking:</h2>
            <p><?php echo $data['uefa-coefficient-ranking']; ?></p>
        </div>
        <div class="city-info">
            <h2>City:</h2>
            <p><?php echo $data['city']; ?></p>
        </div>
        <div class="opponents-info">
            <h2>Opponents:</h2>
            <ul>
                <?php foreach ($data['opponents'] as $opponent) { ?>
                    <li><?php echo $opponent ?></li>
                <?php } ?>
            </ul>
        </div>
        <!-- add back php } if secondary for each loop is needed above -->
    <?php } ?>
</div>

<!-- if footer is not showing it's because the team info isn't loading correctly -->
<?php require "footer.php"; ?>