<?php require "header.php";
require "data.php"; ?>

<div class="teams-container">
    <?php foreach ($teams as $id => $value) { ?>
        <div class="team-icon">
            <a src=""></a>
            <img class="team-logo" src="<?= $value['logo']; ?>" alt="Logo">
            <h1 class="team-name"><?php echo $id ?></h1>
        </div>
    <?php } ?>
</div>

<?php require "footer.php"; ?>