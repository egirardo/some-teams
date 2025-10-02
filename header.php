<?php
$title = "Professional Women's Soccer Teams";
require "data.php";
?>

<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="fonts.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Shrikhand&display=swap" rel="stylesheet">
</head>

<body>
    <header>
        <h1 class="title"><?php echo $title ?></h1>
        <nav class="nav-bar">
            <a href="<?php echo "index.php" ?>">Home</a>
            <a href="<?php echo "about.php" ?>">About</a>
            <a href="">Teams</a>
        </nav>
    </header>