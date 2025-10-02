<?php require "header.php";
require "data.php"; ?>

<div class="teams-container">
    <?php foreach ($teams as $key => $value) { ?>
        <div class="team-icon">
            <a src=""></a>
            <img class="team-logo" src="<?= $value['logo']; ?>" alt="Logo">
        </div>
    <?php } ?>
</div>

<?php require "footer.php"; ?>