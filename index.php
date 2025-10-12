<?php
define("TITLE", "Home");
require "header.php";
require "data.php";
?>

<div class="teams-container">
    <?php foreach ($teams as $id => $value) { ?>
        <div class="team-icon">
            <a class="logo-link" href="teams.php?id=<?php echo $id; ?>">
                <img class="team-logo" src="<?= $value['logo']; ?>" alt="Logo">
            </a>
            <h1 class="team-name"><?php echo $id ?></h1>
        </div>
    <?php } ?>
</div>

<?php require "footer.php"; ?>