<?php
define("TITLE", $_GET["id"]);
require "header.php";
require "data.php";

$id = $_GET["id"];

if (isset($_GET["id"])) {
    $team = $_GET["id"];
    $id = $teams[$team];
}

?>

<div class="team-info">
    <h1 class="name"><?php echo $team; ?></h1>
    <div class="logo-team-pg">
        <img class="logo" src="<?= $id['logo']; ?>" alt="Logo">
    </div>
    <div class="league-info">
        <h2 class="league-title">League:</h2>
        <p><?php echo $id['league']; ?></p>
    </div>
    <div class="uefa-info">
        <h2>UEFA Coefficient Ranking:</h2>
        <p><?php echo $id['uefa-coefficient-ranking']; ?></p>
    </div>
    <div class="city-info">
        <h2>City:</h2>
        <p><?php echo $id['city']; ?></p>
    </div>
    <div class="opponents-info">
        <h2>Opponents:</h2>
        <ul>
            <?php foreach ($id['opponents'] as $opponent) { ?>
                <li><?php echo $opponent ?></li>
            <?php } ?>
        </ul>
    </div>
</div>
<?php require "footer.php"; ?>