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
    <div class="team-header">
        <div class="logo-container">
            <img class="logo-team-pg" src="<?= $id['logo']; ?>" alt="Logo">
        </div>
        <h1 class="name"><?php echo $team; ?></h1>
    </div>
    <div class="info-container">
        <div class="info-left">
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
        </div>
        <div class="line-container"></div>
        <div class="info-right">
            <div class="opponents-info">
                <h2>Opponents:</h2>
                <ul>
                    <?php foreach ($id['opponents'] as $opponent) { ?>
                        <li><?php echo $opponent ?></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php require "footer.php"; ?>