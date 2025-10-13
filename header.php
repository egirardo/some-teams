<?php
$title = "UEFA Women's Champions League";
require "data.php";
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo TITLE; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Shrikhand&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <div class="title-container">
            <a class="title-link" href="index.php">
                <h1 class="title"><?php echo $title ?></h1>
            </a>
        </div>
        <div class="navigation">
            <nav class="nav-bar">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="about.php">About</a>
                <div class="dropdown">
                    <a class="nav-link">Teams</a>
                    <div class="dropdown-content">
                        <?php foreach ($teams as $id => $value): ?>
                            <a href="teams.php?id=<?php echo $id; ?>"><?php echo $id; ?></a>
                        <?php endforeach; ?>
                    </div>

            </nav>
        </div>
    </header>