<?php
require "header.php";
require "data.php";

$id = $_GET["id"];
$team = $teams[$id];
?>

<div class="team-info">
    <h1 class="name"><?php echo $id; ?></h1>
</div>

<?php require "footer.php";
