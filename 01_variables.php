<?php
// HomeWork 1:
// add 2 variables: Price and Publis Date
$price=9.99;
$publishDate="2024-06-01";


$courserName = "PHP Fundamentals part 1";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=  $courserName; ?></title>
</head>
<body>
    <h1>Welcome to <?= $courserName; ?></h1>
    <p>In this course, we will learn the basics of PHP programming language.</p>

    <p>The course <?= $courserName ?> have a price of <span><?= $price ?></span>
     and was Published at: <?= $publishDate ?>
    </p>
</body>
</html>